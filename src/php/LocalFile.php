<?php

namespace CropTool;

class LocalFile
{
    protected $sha1;
    protected $mime;
    protected $imageInfo;
    public $publicPath;
    protected $pagenumber;

    protected function getFileExt($image_mime)
    {
        switch ($image_mime) {
            case 'image/jpeg':
                return '.jpg';
            case 'image/png':
                return '.png';
            case 'image/gif':
                return '.gif';
            case 'image/vnd.djvu':
                return '.djvu';
            case 'application/pdf':
                return '.pdf';
        }
        throw new InvalidMimeTypeException('Invalid mime type: ' . $image_mime);
    }

    public function __construct(ImageInfo $imageInfo, $pagenumber=0)
    {
        $this->publicPath = ROOT_PATH . '/public_html/';

        $this->imageInfo = $imageInfo;
        $this->sha1 = $imageInfo->sha1;
        $this->mime = $imageInfo->mime;
        $this->pagenumber = $pagenumber;
        $this->ext = $this->getFileExt($this->mime);
    }

    public function getShortSha1()
    {
    	return substr($this->sha1, 0, 7);
    }

    protected function pageSuffix($ignorePageSuffix=false)
    {
        return (!$ignorePageSuffix && $this->pagenumber > 0) ? '_page' . $this->pagenumber . '.jpg' : '';
    }

    public function getRelativePath($suffix = '', $ignorePageSuffix=false)
    {
        return 'files/' . $this->sha1 . $suffix . $this->ext . $this->pageSuffix($ignorePageSuffix);
    }

    public function getAbsolutePath($suffix = '', $ignorePageSuffix=false)
    {
        return $this->publicPath . $this->getRelativePath($suffix, $ignorePageSuffix);
    }

    public function getImage($suffix = '')
    {
        $this->fetch();
    	return new Image($this->getAbsolutePath($suffix), $this->mime);
    }

    public function fetch()
    {

        // For all filetypes other than djvu and pdf, these will be equal
        $pagePath = $this->getAbsolutePath();
        $path = $this->getAbsolutePath('', true);

        if (file_exists($pagePath)) {
            // return;  // use existing version
        }

        if (!file_exists($path)) {
            $url = $this->imageInfo->url;
            if (file_put_contents($path, fopen($url)) === false) {
                throw new \RuntimeException('Failed to write image data to disk. Permission problem?');
            }

            if (!filesize($data)) {
                throw new \RuntimeException('Failed to fetch url: ' . $url);
            }

            if (chmod($path, 0664) === false) {
                throw new \RuntimeException('Failed to change permissions for file.');
            }
        }

        if ($this->mime == 'image/vnd.djvu') {

            if (!$this->pagenumber) {
               throw new \RuntimeException('Cannot crop djvu file unless you tell me which page to work with.');
            }

            // Extract page as tiff
            $cmd = sprintf('ddjvu -page=%s -format=tiff %s %s', escapeshellarg($this->pagenumber),
                                                               escapeshellarg($path),
                                                               escapeshellarg($path . $this->pageSuffix() . '.tiff'));
            exec($cmd, $out, $return_var);
            if ($return_var != 0) {
               throw new \RuntimeException('ddjvu exited with code ' . $return_var);
            }

            // Convert tiff to jpg
            $cmd = sprintf('convert %s %s', escapeshellarg($path . $this->pageSuffix() . '.tiff'),
                                           escapeshellarg($path . $this->pageSuffix()));
            exec($cmd, $out, $return_var);
            if ($return_var != 0) {
               throw new \RuntimeException('convert  exited with code ' . $return_var);
            }

            // Remove temporary tiff file
            unlink($path . $this->pageSuffix() . '.tiff');
        }

        if ($this->mime == 'application/pdf') {

            // Extract page as jpg
            $cmd = sprintf('gs -sDEVICE=jpeg -dNOPAUSE -dBATCH -dSAFER -dFirstPage=%s -dLastPage=%s -r300 -dUseCropBox -sOutputFile=%s %s', escapeshellarg($this->pagenumber),
                                    escapeshellarg($this->pagenumber),
                                    escapeshellarg($pagePath),
                                    escapeshellarg($path));

            exec($cmd, $out, $return_var);
            if ($return_var != 0) {
               throw new \RuntimeException('ghostscript exited with code ' . $return_var);
            }
        }
    }

}
