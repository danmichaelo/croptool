<?php

namespace CropTool\File;

use CropTool\QueryResponse;
use DI\FactoryInterface;
use Psr\Log\LoggerInterface;

class FileRepository
{
    protected $publicDir;
    protected $filesDir = 'files/';
    protected $factory;
    protected $logger;

    public function __construct($publicDir, FactoryInterface $factory, LoggerInterface $logger)
    {
        $this->publicDir = rtrim($publicDir, '/') . '/';
        $this->factory = $factory;
        $this->logger = $logger;
    }

    protected function getFileClass($mime)
    {
        switch ($mime) {
            case 'image/tiff':
                return TiffFile::class;
            case 'image/vnd.djvu':
                return DjvuFile::class;
            case 'application/pdf':
                return PdfFile::class;
            case 'image/svg+xml':
                return SvgFile::class;
            default:
                return File::class;
        }
    }

    public function get(QueryResponse $imageinfo)
    {
        $fileClass = $this->getFileClass($imageinfo->mime);

        return $this->factory->make($fileClass, [
            'publicDir' => $this->publicDir,
            'filesDir' => $this->filesDir,
            'imageinfo' => $imageinfo,
        ]);
    }
}
