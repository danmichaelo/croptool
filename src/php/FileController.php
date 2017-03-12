<?php

namespace CropTool;

use DI\FactoryInterface;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class FileController
{

    /**
     * Utility method to return an array with the relative path + file dimensions
     *
     * @param FileInterface $file
     * @param Image $img
     * @param int $pageno
     * @param string $suffix
     * @return array|null
     */
    protected function fileResponse(FileInterface $file, Image $img = null, $pageno = 0, $suffix = '')
    {
        if (is_null($img)) {
            return null;
        }

        return [
            'name' => $file->getRelativePathForPage($pageno, $suffix),
            'width' => $img->width,
            'height' => $img->height,
        ];
    }

    public function exists(Response $response, WikiPage $page)
    {
        return $response->withJson([
            'site' => $page->site,
            'title' => $page->title,
            'exists' => $page->exists,
        ]);
    }

    public function thumb(Response $response, Request $request, WikiPage $page, ImageEditor $editor)
    {
        $pageno = intval($request->getQueryParam('page', 0));

        $page->assertExists();
        $page->assertNotWaitingForLicenseReview();
        $page->file->fetchPage($pageno);

        $srcPath = $page->file->getAbsolutePathForPage($pageno);
        $thumbPath = $page->file->getAbsolutePathForPage($pageno, '_thumb');

        $original = $editor->open($srcPath);     // instance of Image
        $thumb = $original->thumb($thumbPath);   // instance of Image or null

        return $response->withJson([
            'site' => $page->site,
            'title' => $page->title,
            'description' => $page->imageinfo->descriptionurl,
            'pagecount' => $page->imageinfo->pagecount,
            'mime' => $page->imageinfo->mime,
            'original' => $this->fileResponse($page->file, $original, $pageno),
            'thumb' => $this->fileResponse($page->file, $thumb, $pageno, '_thumb'),
            'samplingFactor' => $original->samplingFactor,
            'orientation' => $original->orientation,
        ]);
    }

    public function autodetect(Response $response, Request $request, WikiPage $page, BorderLocator $bloc)
    {
        $pageno = intval($request->getQueryParam('page', 0));
        $srcPath = $page->file->getAbsolutePathForPage($pageno);

        return $response->withJson([
            'area' => $bloc->open($srcPath)->getSelection(),
        ]);
    }

    public function crop(Response $response, Request $request, WikiPage $page, ImageEditor $editor, LoggerInterface $logger, FactoryInterface $factory)
    {
        // @TODO: DRY
        $pageno = intval($request->getQueryParam('page', 0));
        $x = intval($request->getQueryParam('x', 0));
        $y = intval($request->getQueryParam('y', 0));
        $width = intval($request->getQueryParam('width', 0));
        $height = intval($request->getQueryParam('height', 0));
        $rotation = intval($request->getQueryParam('rotate', 0));
        $method = $request->getQueryParam('method', 'precise');

        $t0 = microtime(true) * 1000;

        if ($page->imageinfo->mime == 'image/gif') {
            $method = 'gif';
        } elseif ($page->imageinfo->mime != 'image/jpeg') {
            $method = 'precise';
        }

        $srcPath = $page->file->getAbsolutePathForPage($pageno);
        $destPath = $page->file->getAbsolutePathForPage($pageno, '_cropped');
        $thumbPath = $page->file->getAbsolutePathForPage($pageno, '_cropped_thumb');

        $original = $editor->open($srcPath);
        $crop = $original->crop($destPath, $method, $x, $y, $width, $height, $rotation);
        $thumb = $crop->thumb($thumbPath);

        $logger->info('[{sha1}] Cropped using {method} mode', [
            'sha1' => $page->file->getShortSha1(),
            'method' => $method,
        ]);

        $dim = array();
        if ($original->width != $crop->width) {
            $cropPercentX = round(($original->width - $crop->width) / $original->width * 100);
            $dim[] = ($cropPercentX ?: ' < 1') . ' % horizontally';
        }
        if ($original->height != $crop->height) {
            $cropPercentY = round(($original->height - $crop->height) / $original->height * 100);
            $dim[] = ($cropPercentY ?: ' < 1') . ' % vertically';
        }

        $options = $page->wikitext->possibleStuffToRemove();
        $wd = null;
        if (isset($options['wikidata-item'])) {
            try {
                $item = $factory->make(Item::class, ['entity' => $options['wikidata-item']]);
                $el = $item->get();
                $wd = ['labels' => []];
                foreach ($el->labels as $k => $v) {
                    $wd['labels'][$k] = $v->value;
                }
            } catch (NoSuchEntity $e) {
            }
        }

        return $response->withJson([
            'site' => $page->site,
            'title' => $page->title,
            'pageno' => $pageno,
            'method' => $method,
            'dim' => implode(' and ', $dim) . ' using [[Commons:CropTool|CropTool]] with ' . $method . ' mode.',
            'page' => [
                'elems' => $options,
                'allowOverwrite' => !$page->wikitext->hasAssessmentTemplates(),
            ],
            'crop' => $this->fileResponse($page->file, $crop, $pageno, '_cropped'),
            'thumb' => $this->fileResponse($page->file, $thumb, $pageno, '_cropped_thumb'),
            'time' => time(),
            'wikidata' => $wd,
            'msecs' => round(microtime(true)*1000 - $t0),
        ]);
    }

    public function publish(Response $response, Request $request, WikiPage $page, FactoryInterface $factory, LoggerInterface $logger)
    {
        $sitesSupportingExtractedFromTemplate = [
            'commons.wikimedia.org',
        ];
        $sitesSupportingImageExtractedTemplate = [
            'commons.wikimedia.org',
        ];

        // @TODO: DRY
        $body = $request->getParsedBody();
        $pageno = intval(array_get($body, 'page', 0));
        $overwrite = array_get($body, 'overwrite') == 'overwrite';
        $editComment = array_get($body, 'comment');
        $stuffToRemove = array_get($body, 'elems');
        $ignoreWarnings = boolval(array_get($body, 'ignorewarnings', false));
        $newName = array_get($body, 'filename');

        $page->assertExists();
        $cropPath = $page->file->getAbsolutePathForPage($pageno, '_cropped');

        $wikitext = $page->wikitext;
        $elems = [];
        if (array_get($stuffToRemove, 'border')) {
            $wikitext = $wikitext->withoutBorderTemplate();
            $elems['border'] = 1;
        }
        if (array_get($stuffToRemove, 'watermark')) {
            $wikitext = $wikitext->withoutWatermarkTemplate();
            $elems['watermark'] = 1;
        }

        if ($overwrite) {

            // ignoreWarnings=true is necessary for overwrite
            $uploadResponse = $page->upload($cropPath, $editComment, true);
            $logger->info('Uploaded new version of "' . $page->title . '".');

            $page->setWikitext($wikitext)
                ->save('Removed ' . (implode(' and ', array_keys($elems))) . ' using [[Commons:CropTool|CropTool]]');
        } else {
            $newPage = $factory->make(WikiPage::class, ['title' => $newName]);
            $newPage->assertNotExists();

            // Remove templates before appending {{Extracted from}}
            $wikitext = $wikitext->withoutTemplatesNotToBeCopied();

            if (array_get($stuffToRemove, 'wikidata')) {
                $wikitext = $wikitext->withoutCropForWikidataTemplate();
                $elems['wikidata'] = array_get($stuffToRemove, 'wikidata-item');
            }

            if (in_array($newPage->site, $sitesSupportingExtractedFromTemplate)) {
                $wikitext = $wikitext->appendExtractedFromTemplate($page->title);
            }
            $newPage->setWikitext($wikitext);

            $uploadResponse = $newPage->upload($cropPath, $editComment, $ignoreWarnings);
            $logger->info('Uploaded new version of "' . $page->title . '" as "' . $newPage->title . '".');

            if (in_array($page->site, $sitesSupportingImageExtractedTemplate)) {
                $wt0 = $page->wikitext;
                if (array_get($stuffToRemove, 'wikidata')) {
                    $wt0 = $wt0->withoutCropForWikidataTemplate();
                }
                $page->setWikitext($wt0->appendImageExtractedTemplate($newName))
                    ->save('Added/updated {{Image extracted}} using [[Commons:CropTool|CropTool]]');
            }

            if (array_get($stuffToRemove, 'wikidata')) {
                $wdEntity = array_get($stuffToRemove, 'wikidata-item');
                $item = $factory->make(Item::class, ['entity' => $wdEntity]);
                $item->addClaim('P18', '"' . $newName . '"');
            }
        }

        $uploadResponse->elems = $elems;

        return $response->withJson($uploadResponse);
    }
}
