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

    public $orientation;
    public $samplingFactor;

    public function load($path)
    {
        $this->srcPath = $path;

        $image = new Imagick($path);
        $this->samplingFactor = explode(',', $image->GetImageProperty('jpeg:sampling-factor'))[0];
        $this->orientation = $image->getImageOrientation();

        $logger = new Logger('exiftool');
        $this->exiftool = new Exiftool($logger);

        switch($this->orientation)
        {
            case imagick::ORIENTATION_UNDEFINED:    // 0
            case imagick::ORIENTATION_TOPLEFT:      // 1 : no rotation
            case imagick::ORIENTATION_BOTTOMRIGHT:  // 3 : 180 deg
                $this->width = $image->getImageWidth();
                $this->height = $image->getImageHeight();
                break;

            case imagick::ORIENTATION_RIGHTTOP:     // 6 : 90 deg CW
            case imagick::ORIENTATION_LEFTBOTTOM:   // 8 : 90 deg CCW
                $this->width = $image->getImageHeight();
                $this->height = $image->getImageWidth();
                break;

            default:
                $this->error = 'Unsupported EXIF orientation "' . $this->orientation . '"';
                return false;
        }

        if (!$this->width || !$this->height) {
            unlink($path);
            $this->error = 'Invalid image file. Refreshing the page might help in some cases.';
            return false;
        }

        $this->aspectRatio = $this->width / $this->height;

        return true;
    }

    public function getCropCoordinates($x, $y, $width, $height)
    {

        // Remember:
        // - Origin is in the upper left corner
        // - Positive x is rightwards
        // - Positive y is downwards

        switch($this->orientation)
        {
            case imagick::ORIENTATION_UNDEFINED:    // 0
            case imagick::ORIENTATION_TOPLEFT:      // 1 : no rotation
                // No rotation
                $rect = array(
                    'x' => $x,
                    'y' => $y,
                    'width' => $width,
                    'height' => $height
                );
                break;

            case imagick::ORIENTATION_BOTTOMRIGHT:  // 3 : 180 deg
                // Image rotated 180 deg
                $rect = array(
                    'x' => $this->width - $x - $width,
                    'y' => $this->height - $y - $height,
                    'width' => $width,
                    'height' => $height
                );
                break;

            case imagick::ORIENTATION_RIGHTTOP:     // 6 : 90 deg CW
                // Image rotated 90 deg CCW
                $rect = array(
                    'x' => $y,
                    'y' => $this->width - $x - $width,
                    'width' => $height,
                    'height' => $width
                );
                break;

            case imagick::ORIENTATION_LEFTBOTTOM:   // 8 : 90 deg CCW
                // Image rotated 90 deg CW
                $rect = array(
                    'x' => $this->height - $y - $height,
                    'y' => $x,
                    'width' => $height,
                    'height' => $width
                );
                break;

            default:
                die('Unsupported EXIF orientation');
        }
        return $rect;
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

        switch($this->orientation)
        {
            case imagick::ORIENTATION_UNDEFINED:    // 0
            case imagick::ORIENTATION_TOPLEFT:      // 1 : no rotation
                break;

            case imagick::ORIENTATION_BOTTOMRIGHT:  // 3 : 180 deg
                $srcImg = imagerotate($srcImg, 180, 0);
                break;

            case imagick::ORIENTATION_RIGHTTOP:     // 6 : 90 deg CW
                $srcImg = imagerotate($srcImg, -90, 0);
                break;

            case imagick::ORIENTATION_LEFTBOTTOM:   // 8 : 90 deg CCW
                $srcImg = imagerotate($srcImg, 90, 0);
                break;

            default:
                // we should never get here, this is checked in load() as well
                die('Unsupported EXIF orientation');
        }

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
