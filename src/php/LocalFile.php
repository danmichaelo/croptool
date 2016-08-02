<?php

class LocalFile
{
    protected $sha1;
    protected $mime;
    protected $imageInfo;
    public $publicPath;

    protected function getFileExt($image_mime)
    {
        switch ($image_mime) {
            case 'image/jpeg':
                return '.jpg';
            case 'image/png':
                return '.png';
            case 'image/gif':
                return '.gif';
        }
        throw new InvalidMimeTypeException('Invalid mime type: ' . $image_mime);
    }

    public function __construct(ImageInfo $imageInfo)
    {
        $this->publicPath = ROOT_PATH . '/public_html/';

        $this->imageInfo = $imageInfo;
        $this->sha1 = $imageInfo->sha1;
        $this->mime = $imageInfo->mime;
        $this->ext = $this->getFileExt($this->mime);
    }

    public function getShortSha1()
    {
    	return substr($this->sha1, 0, 7);
    }

    public function getRelativePath($suffix = '')
    {
        return 'files/' . $this->sha1 . $suffix . $this->ext;
    }

    public function getAbsolutePath($suffix = '')
    {
        return $this->publicPath . $this->getRelativePath($suffix);
    }

    public function getImage($suffix = '')
    {
        $this->fetch();
    	return new Image($this->getAbsolutePath($suffix), $this->mime);
    }

    public function fetch()
    {
    	$path = $this->getAbsolutePath();

        if (file_exists($path)) {
        	return;  // use existing version
        }

        $data = file_get_contents($this->imageInfo->url);
        if (!$data) {
            throw new \RuntimeException('Failed to fetch url: ' . $this->imageInfo->url);
        }
        if (file_put_contents($path, $data) === false) {
        	throw new \RuntimeException('Failed to write image data to disk. Permission problem?');
        }
        if (chmod($path, 0664) === false) {
        	throw new \RuntimeException('Failed to change permissions for file.');
        }
    }

}
