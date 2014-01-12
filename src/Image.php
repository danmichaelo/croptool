<?php

use PHPExiftool\Exiftool,
    Monolog\Logger;

/**
 * Class that does the actual cropping
 */
class Image
{

    public static $pathToJpegTran = '/usr/local/bin/jpegtran';
    public static $filesFolder = 'files/';

    public $error;

    public function load($path)
    {
        $this->srcPath = $path;
        $logger = new Logger('exiftool');
        $this->exiftool = new Exiftool($logger);

        $this->orientation = 1;
        $exif = exif_read_data($path);
        if (isset($exif['IFD0']) && isset($exif['IFD0']['Orientation'])) {
            $this->orientation = intval($exif['IFD0']['Orientation']);
        } else if (isset($exif['Orientation'])) {
            $this->orientation = intval($exif['Orientation']);
        }

        $xy = getimagesize($path);

        $this->width = $xy[0];
        $this->height = $xy[1];

        $this->aspectRatio = $this->width / $this->height;

        return true;
    }

    public function getCropCoordinates($x, $y, $width, $height)
    {

        // TODO: check for orientation
        return array(
            'x' => $x,
            'y' => $y,
            'width' => $width,
            'height' => $height
        );

    }

    public function preciseCrop($destPath, $x, $y, $width, $height)
    {
        if (file_exists($destPath)) {
            unlink($destPath);
        }

        // Get coords orientated in the same direction as the image:
        $coords = $this->getCropCoordinates($x, $y, $width, $height);

        // Load img:
        $srcImg = imagecreatefromjpeg($this->srcPath);

        #$cmd = 'convert ' . escapeshellarg($this->srcPath) . ' -crop ' . escapeshellarg($dim) . ' ' . escapeshellarg($destPath);
        #$cmd_res = exec($cmd, $output, $return_var);

        $jpegQuality = 90;

        $dstImg = imagecreatetruecolor($coords['width'], $coords['height']);

        imagecopyresampled($dstImg, $srcImg, 0, 0, $coords['x'], $coords['y'], $coords['width'], $coords['height'], $coords['width'], $coords['height']);
        imagejpeg($dstImg, $destPath, $jpegQuality);
        chmod($destPath, 0664);

        $this->copyMetadata($destPath);

        $cropped = new Image();
        $cropped->load($destPath);

        return array(
            'method' => 'precise',
            'name' => Image::$filesFolder . basename($destPath) . '?ts=' . time(),
            'width' => $cropped->width,
            'height' => $cropped->height
        );

    }

    public function losslessCrop($destPath, $x, $y, $width, $height)
    {
        if (file_exists($destPath)) {
            unlink($destPath);
        }

        // Get coords orientated in the same direction as the image:
        $coords = $this->getCropCoordinates($x, $y, $width, $height);

        $dim = $coords['width'] . 'x' . $coords['height'] . '+' . $coords['x'] .'+' . $coords['y'];
        $cmd = sprintf('%s -copy all -crop %s %s > %s',
            Image::$pathToJpegTran,
            escapeshellarg($dim),
            escapeshellarg($this->srcPath),
            escapeshellarg($destPath)
        );
        $cmd_res = exec($cmd, $output, $return_var);

        if ($cmd_res != "" || $return_var != 0) {
            $res = array('method' => 'lossless', 'error' => $cmd_res);
            if (empty($cmd_res)) {
                switch ($return_var) {
                    case 127:
                        $res['error'] = 'jpegtran not found';
                        break;
                    default:
                        $res['error'] = 'Unknown error ' . $return_var;
                        break;
                }
            }
            return $res;
        }

        chmod($destPath, 0664);

        $this->copyMetadata($destPath);

        $cropped = new Image();
        $cropped->load($destPath);

        return array(
            'method' => 'lossless',
            'name' => Image::$filesFolder . basename($destPath) . '?ts=' . time(),
            'width' => $cropped->width,
            'height' => $cropped->height
        );
    }

    public function copyMetadata($destPath)
    {
        // Reference: http://owl.phy.queensu.ca/~phil/exiftool/exiftool_pod.html
        $this->exiftool->executeCommand(sprintf('-overwrite_original -quiet -TagsFromFile %s -all:all %s',
            escapeshellarg($this->srcPath),
            escapeshellarg($destPath)
        ));

    }

    public function thumb($destPath, $maxWidth, $maxHeight)
    {
        // Currently we only support jpeg, so no checking needed
        $srcImg = imagecreatefromjpeg($this->srcPath);

        // Assume width is the limiting factor
        $w = ($this->width > $maxWidth) ? $maxWidth : $this->width;
        $h = $w / $this->aspectRatio;

        // If height is actually the limiting factor
        if ($h > $maxHeight) {
            $h = ($this->height > $maxHeight) ? $maxHeight : $this->height;
            $w = $h * $this->aspectRatio;
        }

        $destImg = imagecreatetruecolor($w, $h);
        imagecopyresampled($destImg, $srcImg, 0, 0, 0, 0, $w, $h, $this->width, $this->height);

        $w = imagesx($destImg);
        $h = imagesy($destImg);

        imagejpeg($destImg, $destPath);
        return array($w, $h);
    }

}
