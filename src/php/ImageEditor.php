<?php

namespace CropTool;

class ImageEditor
{
    protected $pathToJpegTran = '/usr/local/bin/jpegtran';

    protected $supportedFileTypes = [
        '.jpg' => 'image/jpeg',
        '.png' => 'image/png',
        '.gif' => 'image/gif',
        '.djvu' => 'image/vnd.djvu',
        '.pdf' => 'application/pdf',
    ];

    public function __construct(Config $config)
    {
        $this->pathToJpegTran = $config->get('jpegtranPath');
    }

    public function getPathToJpegTran()
    {
        return $this->pathToJpegTran;
    }

    protected function mimeFromPath($path)
    {
        $fileExt = substr($path, strrpos($path, '.'));
        if (!isset($this->supportedFileTypes[$fileExt])) {
            throw new \RuntimeException('[ImageEditor] Invalid file extension: ' . $fileExt);
        }
        return $this->supportedFileTypes[$fileExt];
    }

    public function open($path)
    {
        if (!file_exists($path)) {
            throw new FileNotFoundException(null, 0, null, $path);
        }

        $mime = $this->mimeFromPath($path);

        return new Image($this, $path, $mime);
    }
}
