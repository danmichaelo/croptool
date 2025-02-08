<?php

namespace CropTool\File;

use CropTool\Errors\InvalidMimeTypeException;
use CropTool\QueryResponse;
use CropTool\Config;
use Imagick;
use Psr\Log\LoggerInterface as Logger;

class File implements FileInterface
{
    protected $publicDir;
    protected $filesDir;
    protected $url;
    protected $sha1;
    protected $mime;
    protected $fileExt;
    protected $multipage = false;
    protected $logger;
    protected $pathToJpegTran;
    protected $pathToDdjvu;
    protected $pathToMagick;
    protected $pathToGs;


    protected $supportedMimeTypes = [
        'image/jpeg' => '.jpg',
        'image/png' => '.png',
        'image/gif' => '.gif',
        'image/webp' => '.webp',
    ];

    public function __construct($publicDir, $filesDir, QueryResponse $imageinfo, Logger $logger, Config $config)
    {
        $this->publicDir = $publicDir;
        $this->filesDir = $filesDir;
        $this->url = $imageinfo->url;
        $this->sha1 = $imageinfo->sha1;
        $this->mime = $imageinfo->mime;
        $this->logger = $logger;

        $this->pathToJpegTran = $config->get('jpegtranPath');
        $this->pathToDdjvu = $config->get('ddjvuPath');
        $this->pathToMagick = $config->get('magickPath');
        $this->pathToGs = $config->get('gsPath');

        $this->fileExt = $this->getFileExt($this->mime);
    }

    public function getPublicDir()
    {
        return $this->publicDir;
    }

    protected function getFileExt($mime)
    {
        if (!isset($this->supportedMimeTypes[$mime])) {
            throw new InvalidMimeTypeException('The mime type is not supported: ' . $mime);
        }
        return $this->supportedMimeTypes[$mime];
    }

    protected function pageSuffix($pageno=0)
    {
        return $pageno > 0 ? '.page' . $pageno . '.jpg' : '';
    }

    public function getShortSha1()
    {
        return substr($this->sha1, 0, 7);
    }

    public function getRelativePath($suffix = '')
    {
        return $this->filesDir . $this->sha1 . $suffix . $this->fileExt;
    }

    public function getAbsolutePath($suffix = '')
    {
        return $this->publicDir . $this->getRelativePath($suffix);
    }

    public function getAbsolutePathForPage($pageno, $suffix = '')
    {
        return $this->getAbsolutePath($suffix) . $this->pageSuffix($pageno);
    }

    public function getRelativePathForPage($pageno, $suffix = '')
    {
        return $this->getRelativePath($suffix) . $this->pageSuffix($pageno);
    }

    public function exists($pageno=0, $suffix = '')
    {
        $path = $this->getAbsolutePathForPage($pageno, $suffix);

        return file_exists($path);
    }

    public function fetch()
    {
        if ($this->exists()) {
            return;
        }

        $path = $this->getAbsolutePath();

        // Init
        $contentLength = -1;
        $fp = fopen($path, 'w');
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);  // seconds
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: CropTool/1.0 (https://croptool.toolforge.org)',
        ]);

        // this function is called by curl for each header received
        curl_setopt($ch, CURLOPT_HEADERFUNCTION,
            function($curl, $header) use (&$contentLength) {
                $len = strlen($header);
                $header = explode(':', $header, 2);
                if (count($header) < 2) {
                    // ignore invalid headers
                    return $len;
                }
                $name = strtolower(trim($header[0]));
                if ($name == 'content-length') {
                    $contentLength = intval(trim($header[1]));
                }
                return $len;
            }
        );

        // Download file
        curl_exec($ch);

        // Tidy up
        curl_close($ch);
        fclose($fp);

        $fsize = filesize($path);

        $this->logMsg("Fetched {$fsize} of {$contentLength} bytes from {$this->url}");

        if (!$fsize || $fsize < $contentLength) {
            if (file_exists($path)) {
                // Remove the partial download
                unlink($path);
            }
            throw new \RuntimeException(
                "Received only $fsize of $contentLength bytes from {$this->url} before the server closed the connection. " .
                "Please retry in a moment."
            );
        }

        if (chmod($path, 0664) === false) {
            throw new \RuntimeException('Failed to change permissions for file.');
        }
    }

    protected function logMsg($msg)
    {
        $this->logger->info('[{sha1}] {msg}', ['sha1' => $this->getShortSha1(), 'msg' => $msg]);
    }

    public function fetchPage($pageno = 0)
    {
        $this->fetch();

        if ($pageno != 0) {
            throw new \RuntimeException('This is not a multipage file.');
        }

        return $this->getAbsolutePathForPage($pageno);
    }

    static public function readMetadata($path) {
        $sz = getimagesize($path);

        if (!$sz) return false;

        return [
            'width' => $sz[0],
            'height' => $sz[1],
        ];
    }

    public function crop($srcPath, $destPath, $method, $coords, $rotation)
    {
        $image = new Imagick($srcPath);

        $image->setImagePage(0, 0, 0, 0);  // Reset virtual canvas, like +repage
        if ($rotation) {
            $image->rotateImage(new \ImagickPixel('#00000000'), $rotation);
            $image->setImagePage(0, 0, 0, 0);  // Reset virtual canvas, like +repage
        }
        $image->cropImage($coords['width'], $coords['height'], $coords['x'], $coords['y']);
        $image->setImagePage(0, 0, 0, 0);  // Reset virtual canvas, like +repage
        static::saveImage($image, $destPath, $srcPath);
        $image->destroy();
    }

    static public function saveImage($im, $destPath, $srcPath)
    {
        return $im->writeImage($destPath);
    }

    public function supportsRotation() {
        return true;
    }

    /**
     * Return extension if the cropped result will have different format than original
     */
    public function overrideResultExtension() {
        return false;
    }
}
