<?php

use Monolog\Logger;

class CropToolController {

    protected $maxMegaPixels = 100;  // A 100 megapixel image requires almost 500 MB of memory

    protected $log_file = '../data/log.txt';
    protected $count_file = '../data/count.txt';

    public $api;
    protected $logger;

    /**
     * CropToolController constructor.
     * @param MwApiClient|null $apiClient
     * @param Logger|null $logger
     */
    public function __construct(MwApiClient $apiClient = null, Logger $logger = null)
    {
        $this->api = $apiClient;
        $this->logger = $logger;
    }

    /**
     * @param string $pagename
     * @return CommonsPage
     */
    protected function page($pagename)
    {
        return new CommonsPage($this->api, $pagename);
    }

    protected function user()
    {
        if (!$this->api->authorized()) {
            return null;
        }
        return $this->api->getUser();
    }

    protected function getUser() {
        $user = $this->user();
        if (is_null($user)) {
            return array('warnings' => $this->api->getAuthorizationWarnings());
        }
        return array('user' => $user);
    }

    protected function getLogout()
    {
        $this->api->logout();
        return $this->getUser();
    }

    private function getAnalysis(CommonsPage $page)
    {
        return $page->analyze();
    }

    protected function getMetadata(CommonsPage $page)
    {
        if ($page->waitingForLicenseReview()) {
            return array('error' => 'This file is currently waiting for Flickr license review. Please wait until the review has been completed before cropping the file, since cropped files cannot be auto-reviewed by the FlickreviewR bot.');
        }

        $imageInfo = $page->getImageInfo();
        $megaPixels = $imageInfo->width * $imageInfo->height / 1e6;
        if ($megaPixels > $this->maxMegaPixels) {
            return array('error' => 'Sorry, the file is too large (' . round($megaPixels) . ' megapixels). CropTool supports files up to ' . $this->maxMegaPixels . ' megapixels.');
        }

        try {
            $localFile = $page->getLocalFile();
        } catch (InvalidMimeTypeException $ex) {
            return array('error' => 'Sorry, the file type is not supported: ' . $imageInfo->mime);
        }

        try {
            $image = $localFile->getImage();
        } catch (\RuntimeException $ex) {
            return array('error' => $ex->getMessage());
        }

        $thumb = $image->thumb($localFile->getAbsolutePath('_thumb'));
        $this->logger->addInfo('[main] ' . $localFile->getShortSha1() . ' Got file "' . $page->pagename . '"');

        return array(
            'original' => array(
                'name' => $localFile->getRelativePath(),
                'width' => $imageInfo->width,
                'height' => $imageInfo->height,
            ),
            'thumb' => $thumb,
            'mime' => $imageInfo->mime,
            'description' => $imageInfo->descriptionurl,
            'orientation' => $image->orientation,
            'samplingFactor' => $image->samplingFactor,
        );
    }

    protected function getExists(CommonsPage $page)
    {
        return array(
            'title' => $page->pagename,
            'exists' => $page->exists(),
        );
    }

    protected function getLocateBorder(CommonsPage $page)
    {
        $info = $this->getMetadata($page);

        $bl = new BorderLocator($info['original']['name']);
        return array(
            'area' => $bl->getSelection(),
        );
    }

    protected function postCrop($input) {
        $page = $this->page($input->title);
        if (!$page->exists()) {
            die('File was not found');
        }
        $imageInfo = $page->getImageInfo();
        $localFile = $page->getLocalFile();
        $srcPath = $localFile->getAbsolutePath();
        $destPath = $localFile->getAbsolutePath('_cropped');

        $new_width = intval($input->w);
        $new_height = intval($input->h);
        $new_x = intval($input->x);
        $new_y = intval($input->y);

        $cropMethod = $input->cropmethod;
        if ($imageInfo->mime == 'image/gif') {
            $cropMethod = 'gif';
        } elseif ($imageInfo->mime != 'image/jpeg') {
            $cropMethod = 'precise';
        }

        $image = new Image($srcPath, $imageInfo->mime);
        $s1 = array($image->width, $image->height);
        try {
            $res = $image->crop($cropMethod, $destPath, $new_x, $new_y, $new_width, $new_height);
        } catch (CropFailed $error) {
            return array(
                'error' => 'Crop failed: ' . $error->getMessage(),
            );
        }
        $s2 = array($res['width'], $res['height']);

        // Make thumb
        $image = new Image($destPath, $imageInfo->mime);
        $res['thumb'] = $image->thumb($localFile->getAbsolutePath('_cropped_thumb'));

        $dim = array();
        if ($s1[0] != $s2[0]) {
            $cropPercentX = round(($s1[0]-$s2[0]) / $s1[0] * 100);
            $dim[] = ($cropPercentX ?: ' < 1') . ' % horizontally';
        }
        if ($s1[1] != $s2[1]) {
            $cropPercentY = round(($s1[1]-$s2[1]) / $s1[1] * 100);
            $dim[] = ($cropPercentY ?: ' < 1') . ' % vertically';
        }

        $using = 'using [[Commons:CropTool|CropTool]] with ' . $res['method'] . ' mode.';
        $res['dim'] = implode(' and ', $dim) . ' ' . $using;
        $res['page'] = $page->analyze();

        $this->logger->addInfo('[main] ' . $localFile->getShortSha1() . ' Did crop using method: ' . $cropMethod );

        return $res;
    }

    protected function postUpload($input) {

        // Get user
        $user = $this->user();

        // Get page
        $page = $this->page($input->title);
        if (!$page->exists()) {
            die('File was not found');
        }

        $shortSha1 = $page->getLocalFile()->getShortSha1();

        if ($input->overwrite == 'overwrite') {

            $response = $page->upload($input->comment);

            if (isset($response->error) || $response->upload->result != 'Success') {
                $this->logger->addError('[main] ' . $shortSha1 . ' Upload failed');
                return $response;
            }

            $this->logger->addInfo('[main] ' . $shortSha1 . ' Uploaded cropped file using the same name');
            if ($page->removeStuff($input->elems)) {
                $this->logger->addInfo('[main] ' . $shortSha1 . ' Updated wikitext');
            }

        } else {

            $ignoreWarnings = isset($input->ignorewarnings) && $input->ignorewarnings;
            $derivedPage = $page->makeDerivative($input->filename);
            $response = $derivedPage->upload($input->comment, $ignoreWarnings);

            if (isset($response->error) || $response->upload->result != 'Success') {
                $this->logger->addError('[main] ' . $shortSha1 . ' Upload failed');
                return $response;
            }

            $this->logger->addInfo('[main] ' . $shortSha1 . ' Uploaded file as "' . $input->filename . '"');
            if ($page->addDerivativeVersion($input->filename)) {
                $this->logger->addInfo('[main] ' . $shortSha1 . ' Added/updated {{Derivative versions}} in "' . $input->title . '"');
            }
        }

        $line = $page->pagename . "\t" . $user . "\n";
        file_put_contents($this->log_file, $line, FILE_APPEND);

        $cnt = intval(file_get_contents($this->count_file));
        $cnt++;
        file_put_contents($this->count_file, $cnt);

        return $response->upload;
    }

    protected function handlePostRequest($input)
    {
        if (!$this->api->authorized()) {
            return array('error' => 'not_logged_in');
        }
        if (isset($input->store)) {
            return $this->postUpload($input);
        }
        return $this->postCrop($input);
    }

    protected function handleGetRequest($action, $title)
    {
        if (is_null($action)) {
            return array('error' => 'Invalid request');
        }

        $page = is_null($title) ? null : $this->page($title);

        switch ($action) {
            case 'checkLogin':
                return $this->getUser();

            case 'exists':
                return $this->getExists($page);

            case 'authorize':
                return $this->api->authorize();

        }

        // Require authorization for routes below
        if (!$this->api->authorized()) {
            return array('error' => 'not_logged_in');
        }

        // Require page existence for routes below
        if (!is_null($page) && !$page->exists()) {
            return array('error' => 'File not found: ' . $page->pagename . ' on ' . $this->api->getSite());
        }

        switch ($action) {
            case 'logout':
                return $this->getLogout();

            case 'metadata':
                return $this->getMetadata($page);

            case 'analyzepage':
                return $this->getAnalysis($page);

            case 'locateBorder':
                return $this->getLocateBorder($page);

            default:
                return array('error' => 'unknown_action');
        }
    }

    public function handleRequest($method, $data)
    {
        if ($method == 'POST') {
            $response = $this->handlePostRequest($data);
        } else {
            $response = $this->handleGetRequest(array_get($data, 'action'), array_get($data, 'title'));
        }

        header('Content-type: application/json');
        echo json_encode($response);
    }

}