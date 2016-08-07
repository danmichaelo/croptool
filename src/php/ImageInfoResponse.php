<?php

namespace CropTool;

class ImageInfoResponse
{
    public $exists = false;
    public $sha1;
    public $mime;
    public $url;
    public $width;
    public $height;
    public $descriptionurl;

    public function __construct($response=null)
    {
        if (is_null($response)) {
            return;
        }
        foreach ($response->pages as $pageid => $page) {
            if ($pageid == '-1') {
                $this->exists = false;
                return;
            }
            $this->exists = true;
            $this->parse($page->imageinfo[0]);
        }
    }

    protected function parse($data)
    {
        $this->sha1 = $data->sha1;
        $this->mime = $data->mime;
        $this->url = $data->url;
        $this->width = $data->width;
        $this->height = $data->height;
        $this->descriptionurl = $data->descriptionurl;
    }

    public function getShortSha1()
    {
        return substr($this->sha1, 0, 7);
    }
}
