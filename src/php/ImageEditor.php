<?php

namespace CropTool;

use CropTool\Errors\FileNotFoundException;
use CropTool\File\FileInterface;

class ImageEditor
{
    protected $supportedFileTypes = [
        '.jpg' => 'image/jpeg',
        '.png' => 'image/png',
        '.tif' => 'image/tiff',
        '.tiff' => 'image/tiff',
        '.gif' => 'image/gif',
        '.djvu' => 'image/vnd.djvu',
        '.pdf' => 'application/pdf',
        '.webp' => 'image/webp',
        '.svg' => 'image/svg+xml'
    ];

    public function mimeFromPath($path)
    {
        $fileExt = substr($path, strrpos($path, '.'));
        if (!isset($this->supportedFileTypes[$fileExt])) {
            throw new \RuntimeException('[ImageEditor] Invalid file extension: ' . $fileExt);
        }
        return $this->supportedFileTypes[$fileExt];
    }

    public function open(FileInterface $file, int $pageno)
    {
        $path = $file->getAbsolutePathForPage($pageno);

        if (!file_exists($path)) {
            throw new FileNotFoundException(null, 0, null, $path);
        }

        $mime = $this->mimeFromPath($path);

        return new Image($this, $file, $path, $mime);
    }
}
