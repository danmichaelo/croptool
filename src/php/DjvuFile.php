<?php

namespace CropTool;

class DjvuFile extends File implements FileInterface
{
    protected $multipage = true;

    public function fetchPage($pageno)
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
        $cmd = sprintf(
            'ddjvu -page=%s -format=tiff %s %s',
            escapeshellarg($pageno),
            escapeshellarg($djvuFile),
            escapeshellarg($tiffFile)
        );
        exec($cmd, $out, $return_var);
        if ($return_var != 0) {
            throw new \RuntimeException('ddjvu exited with code ' . $return_var);
        }

        // Convert tiff to jpg
        $cmd = sprintf(
            'convert %s %s',
            escapeshellarg($tiffFile),
            escapeshellarg($jpgFile)
        );
        exec($cmd, $out, $return_var);
        if ($return_var != 0) {
            throw new \RuntimeException('convert  exited with code ' . $return_var);
        }

        // Remove temporary tiff file
        unlink($tiffFile);

        $this->logMsg('Extracted page ' . $pageno);

        return $jpgFile;
    }
}
