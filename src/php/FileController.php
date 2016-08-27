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
    protected function fileResponse(FileInterface $file, Image $img, $pageno, $suffix = '')
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

    public function crop(Response $response, Request $request, WikiPage $page, ImageEditor $editor, LoggerInterface $logger)
    {
        // @TODO: DRY
        $pageno = intval($request->getQueryParam('page', 0));
        $x = intval($request->getQueryParam('x', 0));
        $y = intval($request->getQueryParam('y', 0));
        $width = intval($request->getQueryParam('width', 0));
        $height = intval($request->getQueryParam('height', 0));
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
        $crop = $original->crop($destPath, $method, $x, $y, $width, $height);
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

        return $response->withJson([
            'site' => $page->site,
            'title' => $page->title,
            'pageno' => $pageno,
            'method' => $method,
            'dim' => implode(' and ', $dim) . ' using [[Commons:CropTool|CropTool]] with ' . $method . ' mode.',
            'page' => [
                'elems' => $page->wikitext->possibleStuffToRemove(),
            ],
            'crop' => $this->fileResponse($page->file, $crop, $pageno, '_cropped'),
            'thumb' => $this->fileResponse($page->file, $thumb, $pageno, '_cropped_thumb'),
            'time' => time(),
            'msecs' => round(microtime(true)*1000 - $t0),
        ]);
    }

    public function publish(Response $response, Request $request, WikiPage $page, FactoryInterface $factory, LoggerInterface $logger)
    {
        $sitesSupportingExtractedFromTemplate = [
            'commons.wikimedia.org',
        ];
        $sitesSupportingDerivativeVersionsTemplate = [
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
        $removed = [];
        if (array_get($stuffToRemove, 'border')) {
            $wikitext = $wikitext->withoutBorderTemplate();
            $removed[] = 'border';
        }
        if (array_get($stuffToRemove, 'watermark')) {
            $wikitext = $wikitext->withoutWatermarkTemplate();
            $removed[] = 'watermark';
        }

        if ($overwrite) {

            // ignoreWarnings=true is necessary for overwrite
            $uploadResponse = $page->upload($cropPath, $editComment, true);
            $logger->info('Uploaded new version of "' . $page->title . '".');

            $page->setWikitext($wikitext)
                ->save('Removed ' . (implode(' and ', $removed)) . ' using [[Commons:CropTool|CropTool]]');
        } else {
            $newPage = $factory->make(WikiPage::class, ['title' => $newName]);
            $newPage->assertNotExists();

            if (in_array($newPage->site, $sitesSupportingExtractedFromTemplate)) {
                $wikitext = $wikitext->appendExtractedFromTemplate($page->title);
            }
            $newPage->setWikitext($wikitext->withoutTemplatesNotToBeCopied());

            $uploadResponse = $newPage->upload($cropPath, $editComment, $ignoreWarnings);
            $logger->info('Uploaded new version of "' . $page->title . '" as "' . $newPage->title . '".');

            $page->setWikitext($page->wikitext->appendDerivativeVersionsTemplate($newName))
                ->save('Added/updated {{Derivative versions}} using [[Commons:CropTool|CropTool]]');
        }

        return $response->withJson($uploadResponse);
    }
}
