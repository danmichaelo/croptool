<?php

namespace CropTool;

use pastuhov\Command\Command;

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

        $pdfFile = $this->getAbsolutePath();
        $jpgFile = $this->getAbsolutePathForPage($pageno);

        Command::exec('gs -sDEVICE=jpeg -dNOPAUSE -dBATCH -dSAFER -dFirstPage={page} -dLastPage={page} -r300 -dUseCropBox -sOutputFile={dest} {src}', [
            'page' => $pageno,
            'src' => $pdfFile,
            'dest' => $jpgFile,
        ]);

        $this->logMsg('Extracted page ' . $pageno);

        return $jpgFile;
    }
}
