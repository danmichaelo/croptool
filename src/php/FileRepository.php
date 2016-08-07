<?php

namespace CropTool;

use DI\FactoryInterface;

class FileRepository
{
    protected $publicDir;
    protected $filesDir = 'files/';
    protected $factory;

    public function __construct($publicDir, FactoryInterface $factory)
    {
        $this->publicDir = rtrim($publicDir, '/') . '/';
        $this->factory = $factory;
    }

    protected function getFileClass($mime)
    {
        switch ($mime) {
            case 'image/vnd.djvu':
                return DjvuFile::class;
            case 'application/pdf':
                return PdfFile::class;
            default:
                return File::class;
        }
    }

    public function get(ImageInfoResponse $imageinfo)
    {
        $fileClass = $this->getFileClass($imageinfo->mime);
        return $this->factory->make($fileClass, [
            'publicDir' => $this->publicDir,
            'filesDir' => $this->filesDir,
            'imageinfo' => $imageinfo,
        ]);
    }
}
