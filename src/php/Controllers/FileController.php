<?php

namespace CropTool\Controllers;

use CropTool\BorderLocator;
use CropTool\EditSummary;
use CropTool\File\FileInterface;
use CropTool\Image;
use CropTool\ImageEditor;
use CropTool\WikidataItem;
use CropTool\NoSuchEntity;
use CropTool\WikiPageService;
use DI\FactoryInterface;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class FileController
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

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
            'name' => substr($img->path, strlen($file->getPublicDir())),
            'width' => $img->width,
            'height' => $img->height,
        ];
    }

    public function exists(Response $response, Request $request, WikiPageService $pageService)
    {
        $page = $pageService->getForTitle( $request->getQueryParams()['title'], $request->getQueryParams()['site'] );
        $response->getBody()->write((string)json_encode([
            'site' => $page->site,
            'title' => $page->title,
            'exists' => $page->exists,
        ]));
        return $response;
    }

    public function info(Response $response, Request $request, WikiPageService $pageService, ImageEditor $editor)
    {
        $page = $pageService->getForTitle($request->getQueryParams()['title'], $request->getQueryParams()['site']);
        $pageno = intval($request->getQueryParams()['page'] ?? 0);

        $page->assertExists();
        $page->assertNotWaitingForLicenseReview();
        $page->file->fetchPage($pageno);

        $thumbPath = $page->file->getAbsolutePathForPage($pageno, '_thumb');

        // If tiff file, then create jpg thumb, since most browsers don't support tiff
        $thumbPath = preg_replace('/\.tiff?$/', '.jpg', $thumbPath);

        $original = $editor->open($page->file, $pageno);     // instance of Image
        $thumb = $original->thumb($thumbPath);   // instance of Image or null

        $response->getBody()->write((string)json_encode([
            'site' => $page->site,
            'title' => $page->title,
            'description' => $page->imageinfo->descriptionurl,
            'pagecount' => $page->imageinfo->pagecount,
            'mime' => $page->imageinfo->mime,
            'original' => $this->fileResponse($page->file, $original, $pageno),
            'thumb' => $this->fileResponse($page->file, $thumb, $pageno, '_thumb'),
            'samplingFactor' => $original->samplingFactor,
            'orientation' => $original->orientation,
            'categories' => $page->imageinfo->categories,
            'supportsRotation' => $page->file->supportsRotation(),
            'overrideResultExtension' => $page->file->overrideResultExtension()
        ]));

        return $response;
    }

    public function autodetect(Response $response, Request $request, WikiPageService $pageService, BorderLocator $bloc)
    {
        $page = $pageService->getForTitle($request->getQueryParams()['title'], $request->getQueryParams()['site']);
        $pageno = intval($request->getQueryParams()['page'] ?? 0);
        $srcPath = $page->file->getAbsolutePathForPage($pageno);

        $response->getBody()->write((string)json_encode([
            'area' => $bloc->open($srcPath)->getSelection(),
        ]));

        return $response;
    }

    public function crop(Response $response, Request $request, WikiPageService $pageService, ImageEditor $editor, LoggerInterface $logger, FactoryInterface $factory)
    {
        $page = $pageService->getForTitle($request->getQueryParams()['title'] ?? 0, $request->getQueryParams()['site'] ?? 'commons.wikimedia.org');
        // @TODO: DRY
        $pageno = intval($request->getQueryParams()['page'] ?? 0);
        $x = intval($request->getQueryParams()['x'] ?? 0);
        $y = intval($request->getQueryParams()['y'] ?? 0);
        $width = intval($request->getQueryParams()['width'] ?? 0);
        $height = intval($request->getQueryParams()['height'] ?? 0);
        $rotation = floatval($request->getQueryParams()['rotate'] ?? 0);
        $cropMethod = $request->getQueryParams()['method'] ??'precise';

        $t0 = microtime(true) * 1000;

        $destPath = $page->file->getAbsolutePathForPage($pageno, '_cropped');
        $thumbPath = $page->file->getAbsolutePathForPage($pageno, '_cropped_thumb');

        // If tiff file, then create jpg thumb, since most browsers don't support tiff
        $thumbPath = preg_replace('/\.tiff?$/', '.jpg', $thumbPath);

        if (!in_array($cropMethod, ['lossless', 'precise'])) {
            throw new \RuntimeException('Unknown crop method specified');
        }

        $original = $editor->open($page->file, $pageno);
        $crop = $original->crop($destPath, $cropMethod, $x, $y, $width, $height, $rotation);
        $thumb = $crop->thumb($thumbPath);

        $logger->info('[{sha1}] Cropped using {method} mode', [
            'sha1' => $page->file->getShortSha1(),
            'method' => $cropMethod,
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
        $cropPercentXY = round((1 - $crop->width * $crop->height / ($original->width * $original->height)) * 100);
        $dim[] = ($cropPercentXY ?: ' < 1') . ' % areawise';
        if ($rotation) {
            $dim[] = "rotated {$rotation}°";
        }

        $options = $page->wikitext->possibleStuffToRemove();
        $wd = null;
        if (isset($options['wikidata-item'])) {
            try {
                $item = $factory->make(WikidataItem::class, ['entity' => $options['wikidata-item']]);
                $el = $item->get();
                $wd = ['labels' => []];
                foreach ($el->labels as $k => $v) {
                    $wd['labels'][$k] = $v->value;
                }
            } catch (NoSuchEntity $e) {
            }
        }

        $response->getBody()->write((string)json_encode(([
            'site' => $page->site,
            'title' => $page->title,
            'pageno' => $pageno,
            'method' => $cropMethod,
            'dim' => implode(', ', $dim) . ' using [[Commons:CropTool|CropTool]] with ' . $cropMethod . ' mode.',
            'page' => [
                'elems' => $options,
                'hasAssessmentTemplates' => $page->wikitext->hasAssessmentTemplates(),
                'hasDoNotCropTemplate' => $page->wikitext->hasDoNotCropTemplate(),
            ],
            'crop' => $this->fileResponse($page->file, $crop, $pageno, '_cropped'),
            'thumb' => $this->fileResponse($page->file, $thumb, $pageno, '_cropped_thumb'),
            'time' => time(),
            'wikidata' => $wd,
            'msecs' => round(microtime(true)*1000 - $t0),
        ])));

        return $response;
    }

    public function publish(Response $response, Request $request, WikiPageService $pageService, FactoryInterface $factory, LoggerInterface $logger)
    {
        $sitesSupportingExtractedFromTemplate = [
            'commons.wikimedia.org',
        ];
        $sitesSupportingImageExtractedTemplate = [
            'commons.wikimedia.org',
        ];

        // @TODO: DRY
        $body = $request->getParsedBody();
        $site = array_get($body, 'site', 'commons.wikimedia.org');
        $page = $pageService->getForTitle(array_get($body, 'title'), $site);
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
        if (array_get($stuffToRemove, 'trimming')) {
            $wikitext = $wikitext->withoutTrimmingTemplate();
            $elems['trimming'] = 1;
        }
        if (array_get($stuffToRemove, 'watermark')) {
            $wikitext = $wikitext->withoutWatermarkTemplate();
            $elems['watermark'] = 1;
        }

        if ($overwrite) {

            // ignoreWarnings=true is necessary for overwrite
            $uploadResponse = $page->upload($cropPath, $editComment, true);
            $logger->info('Uploaded new version of "' . $page->title . '".');

            $editSummary = new EditSummary();

            if (count($elems)) {
                $editSummary->add('removing ' . implode(' and ', array_keys($elems)));
            }

            if ($page->inCategory('All non-free media')) {
                $wikitext = $wikitext->addOrfurrev();
                $editSummary->add('tagging with {{Orphaned non-free revisions}}');
            }

            $page->setWikitext($wikitext)
                ->save($editSummary->build());
        } else {
            $newPage = $pageService->getForTitle( $newName, $site );
            if (!$ignoreWarnings) {
                $newPage->assertNotExists();
            }

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

            $editSummary = new EditSummary();

            if (in_array($page->site, $sitesSupportingImageExtractedTemplate)) {
                $wt0 = $page->wikitext;
                if (array_get($stuffToRemove, 'wikidata')) {
                    $wt0 = $wt0->withoutCropForWikidataTemplate();
                }
                $editSummary->add('adding/updating {{Image extracted}}');
                $page->setWikitext($wt0->appendImageExtractedTemplate($newName))
                    ->save($editSummary->build());
            }

            if (array_get($stuffToRemove, 'wikidata')) {
                $wdEntity = array_get($stuffToRemove, 'wikidata-item');
                $item = $factory->make(WikidataItem::class, ['entity' => $wdEntity]);
                $item->addClaim('P18', '"' . $newName . '"');
            }
        }

        $uploadResponse->elems = $elems;

        $response->getBody()->write((string)json_encode($uploadResponse));
        return $response;
    }
}
