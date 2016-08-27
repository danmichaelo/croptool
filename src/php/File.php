<?php

namespace CropTool;

use Psr\Log\LoggerInterface as Logger;

class File implements FileInterface
{
    protected $publicDir;
    protected $filesDir;
    protected $url;
    protected $sha1;
    protected $mime;
    protected $fileExt;
    protected $multipage = false;
    protected $logger;

    protected $supportedMimeTypes = [
        'image/jpeg' => '.jpg',
        'image/png' => '.png',
        'image/gif' => '.gif',
        'image/vnd.djvu' => '.djvu',
        'application/pdf' => '.pdf',
    ];

    public function __construct($publicDir, $filesDir, ImageInfoResponse $imageinfo, Logger $logger)
    {
        $this->publicDir = $publicDir;
        $this->filesDir = $filesDir;
        $this->url = $imageinfo->url;
        $this->sha1 = $imageinfo->sha1;
        $this->mime = $imageinfo->mime;
        $this->logger = $logger;

        $this->fileExt = $this->getFileExt($this->mime);
    }

    protected function getFileExt($mime)
    {
        if (!isset($this->supportedMimeTypes[$mime])) {
            throw new InvalidMimeTypeException('The mime type is not supported: ' . $mime);
        }
        return $this->supportedMimeTypes[$mime];
    }

    protected function pageSuffix($pageno=0)
    {
        return $pageno > 0 ? '.page' . $pageno . '.jpg' : '';
    }

    public function getShortSha1()
    {
        return substr($this->sha1, 0, 7);
    }

    public function getRelativePath($suffix = '')
    {
        return $this->filesDir . $this->sha1 . $suffix . $this->fileExt;
    }

    public function getAbsolutePath($suffix = '')
    {
        return $this->publicDir . $this->getRelativePath($suffix);
    }

    public function getAbsolutePathForPage($pageno, $suffix = '')
    {
        return $this->getAbsolutePath($suffix) . $this->pageSuffix($pageno);
    }

    public function getRelativePathForPage($pageno, $suffix = '')
    {
        return $this->getRelativePath($suffix) . $this->pageSuffix($pageno);
    }

    public function exists($pageno=0, $suffix = '')
    {
        $path = $this->getAbsolutePathForPage($pageno, $suffix);

        return file_exists($path);
    }

    public function fetch()
    {
        if ($this->exists()) {
            return;
        }

        $path = $this->getAbsolutePath();

        if (file_put_contents($path, fopen($this->url, 'b')) === false) {
            throw new \RuntimeException('Failed to store ' . $this->url .' to ' . $path . '. Connectivity or permission problem?');
        }

        if (!filesize($path)) {
            throw new \RuntimeException('Failed to fetch url: ' . $this->url);
        }

        if (chmod($path, 0664) === false) {
            throw new \RuntimeException('Failed to change permissions for file.');
        }

        $this->logMsg('Fetched ' . $this->url);
    }

    protected function logMsg($msg)
    {
        $this->logger->info('[{sha1}] {msg}', ['sha1' => $this->getShortSha1(), 'msg' => $msg]);
    }

    public function fetchPage($pageno = 0)
    {
        $this->fetch();

        if ($pageno != 0) {
            throw new \RuntimeException('This is not a multipage file.');
        }

        return $this->getAbsolutePathForPage($pageno);
    }
}
