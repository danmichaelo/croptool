<?php

namespace CropTool\File;

use pastuhov\Command\Command;

class DjvuFile extends File implements FileInterface
{
    protected $multipage = true;

    protected $supportedMimeTypes = [
        'image/vnd.djvu' => '.djvu',
    ];

    public function fetchPage($pageno = 0)
    {
        if ($pageno == 0) {
            throw new \RuntimeException('A "page" parameter must be specified.');
        }

        $this->fetch();

        $djvuFile = $this->getAbsolutePath();
        $jpgFile = $this->getAbsolutePathForPage($pageno);
        $tiffFile = $jpgFile . '.tiff';

        if ($this->exists($pageno)) {
            return $jpgFile;
        }

        // Extract page as tiff
        Command::exec('ddjvu -page={page} -format=tiff {src} {dest}', [
            'page' => $pageno,
            'src' => $djvuFile,
            'dest' => $tiffFile,
        ]);

        // Convert tiff to jpg
        Command::exec('convert {src} {dest}', [
            'src' => $tiffFile,
            'dest' => $jpgFile,
        ]);

        // Remove temporary tiff file
        unlink($tiffFile);

        $this->logMsg('Extracted page ' . $pageno);

        return $jpgFile;
    }
}
