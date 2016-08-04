<?php

namespace CropTool;

class ImageInfo {

	protected $data;

	public $sha1;
	public $mime;
	public $url;
	public $width;
	public $height;
	public $descriptionurl;

	public function __construct($data)
	{
		$this->data = $data;
		$this->sha1 = $data->imageinfo[0]->sha1;
		$this->mime = $data->imageinfo[0]->mime;
		$this->url = $data->imageinfo[0]->url;
		$this->width = $data->imageinfo[0]->width;
		$this->height = $data->imageinfo[0]->height;
		$this->descriptionurl = $data->imageinfo[0]->descriptionurl;
	}

    public function getShortSha1()
    {
    	return substr($this->sha1, 0, 7);
    }

}