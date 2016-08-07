<?php

namespace CropTool;

class PdfFile extends File implements FileInterface
{
    protected $multipage = true;

    public function fetchPage($pageno)
    {
        if ($pageno == 0) {
            throw new \RuntimeException('A "page" parameter must be specified.');
        }

        $this->fetch();

        if ($this->exists($pageno)) {
            return;
        }

        $djvuFile = $this->getAbsolutePath();
        $jpgFile = $this->getAbsolutePathForPage($pageno);

        $cmd = sprintf(
            'gs -sDEVICE=jpeg -dNOPAUSE -dBATCH -dSAFER -dFirstPage=%s -dLastPage=%s -r300 -dUseCropBox -sOutputFile=%s %s',
            escapeshellarg($pageno),
            escapeshellarg($pageno),
            escapeshellarg($jpgFile),
            escapeshellarg($djvuFile)
        );

        exec($cmd, $out, $return_var);

        if ($return_var != 0) {
            throw new \RuntimeException('ghostscript exited with code ' . $return_var);
        }

        $this->logMsg('Extracted page ' . $pageno);

        return $jpgFile;
    }
}
