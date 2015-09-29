<?php

/**
 * Class that does the actual cropping
 */
class Image
{

    public static $pathToJpegTran = '/usr/local/bin/jpegtran';
    public static $filesFolder = 'files/';

    public $error;

    public $path;
    public $mime;
    public $orientation;
    public $samplingFactor;
    public $width;
    public $height;

    protected $thumbWidth = 800;
    protected $thumbHeight = 800;

    public function __construct($path, $mime)
    {
        $this->srcPath = $path;
        $this->mime = $mime;
        $this->_load();
    }

    public function _load()
    {
        if ($this->mime != 'image/jpeg') {

            $this->orientation = 0;
            $image = new \Imagick($this->srcPath);
            $this->width = $image->getImageWidth();
            $this->height = $image->getImageHeight();

        } else {
            $exif = @exif_read_data($this->srcPath, 'IFD0');
            $this->orientation = (isset($exif) && isset($exif['Orientation'])) ? intval($exif['Orientation']) : 0;

            $image = new \Imagick($this->srcPath);
            $sf = explode(',', $image->GetImageProperty('jpeg:sampling-factor'));
            $this->samplingFactor = $sf[0];

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
        }

        $image->destroy();

        if (!$this->width || !$this->height) {
            unlink($this->srcPath);
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

    public function flipped()
    {
        switch($this->orientation)
        {
            case imagick::ORIENTATION_UNDEFINED:    // 0
            case imagick::ORIENTATION_TOPLEFT:      // 1 : no rotation
                return false;

            case imagick::ORIENTATION_BOTTOMRIGHT:  // 3 : 180 deg
                return false;


            case imagick::ORIENTATION_RIGHTTOP:     // 6 : 90 deg CW
                return true;

            case imagick::ORIENTATION_LEFTBOTTOM:   // 8 : 90 deg CCW
                return true;

            default:
                die('Unsupported EXIF orientation');
        }
    }

    public function crop($method, $destPath, $x, $y, $width, $height)
    {
        if (file_exists($destPath)) {
            unlink($destPath);
        }

        // Get coords orientated in the same direction as the image:
        $coords = $this->getCropCoordinates($x, $y, $width, $height);

        if ($method == 'gif') {
            $this->gifCrop($destPath, $coords);
        } else if ($method == 'lossless') {
            $this->losslessCrop($destPath, $coords);
            $size = getimagesize($destPath);
            $width = $this->flipped() ? $size[1] : $size[0];
            $height = $this->flipped() ? $size[0] : $size[1];
        } else if ($method == 'precise') {
            $this->preciseCrop($destPath, $coords);
        } else {
            die('Unknown crop method');
        }

        chmod($destPath, 0664);

        return array(
            'method' => $method,
            'name' => Image::$filesFolder . basename($destPath) . '?ts=' . time(),
            'width' => $width,
            'height' => $height,
        );
    }

    public function preciseCrop($destPath, $coords)
    {
        $image = new \Imagick($this->srcPath);

        $image->setImagePage(0, 0, 0, 0);  // Reset virtual canvas, like +repage
        $image->cropImage($coords['width'], $coords['height'], $coords['x'], $coords['y']);
        $image->setImagePage(0, 0, 0, 0);  // Reset virtual canvas, like +repage

        // Imagick will copy metadata to the destination file
        $image->writeImage($destPath);

        $image->destroy();
    }

    public function exec($cmd)
    {
        $cmd_res = exec($cmd, $output, $return_var);
        $cmd = explode(' ', $cmd);
        if ($cmd_res != "" || $return_var != 0) {
            if (empty($cmd_res)) {
                switch ($return_var) {
                    case 127:
                        throw new CropFailed('Command not found: ' . $cmd[0]);
                    default:
                        throw new CropFailed('Unknown error ' . $return_var);
                }
            }
            throw new CropFailed($cmd_res);
        }
    }

    public function gifCrop($destPath, $coords)
    {
        $dim = $coords['width'] . 'x' . $coords['height'] . '+' . $coords['x'] .'+' . $coords['y'] . '!';

        $cmd = sprintf('convert %s -crop %s %s',
            escapeshellarg($this->srcPath),
            escapeshellarg($dim),
            escapeshellarg($destPath)
        );
        $this->exec($cmd);
    }

    public function losslessCrop($destPath, $coords)
    {
        $dim = $coords['width'] . 'x' . $coords['height'] . '+' . $coords['x'] .'+' . $coords['y'];
        $cmd = sprintf('%s -copy all -crop %s %s > %s',
            Image::$pathToJpegTran,
            escapeshellarg($dim),
            escapeshellarg($this->srcPath),
            escapeshellarg($destPath)
        );
        $this->exec($cmd);
    }

    public function _thumb($thumbPath, $maxWidth, $maxHeight)
    {
        try
        {
            $im = new \Imagick;
            $im->readImage($this->srcPath);

            switch($this->orientation)
            {
                case \imagick::ORIENTATION_UNDEFINED:    // 0
                case \imagick::ORIENTATION_TOPLEFT:      // 1 : no rotation
                    break;

                case \imagick::ORIENTATION_BOTTOMRIGHT:  // 3 : 180 deg
                    $im->rotateimage(new \ImagickPixel(), 180);
                    break;

                case \imagick::ORIENTATION_RIGHTTOP:     // 6 : 90 deg CW
                    $im->rotateimage(new \ImagickPixel(), 90);
                    break;

                case \imagick::ORIENTATION_LEFTBOTTOM:   // 8 : 90 deg CCW
                    $im->rotateimage(new \ImagickPixel(), -90);
                    break;

                default:
                    // we should never get here, this is checked in load() as well
                    die('Unsupported EXIF orientation');
            }

            // Now that it's auto-rotated, make sure the EXIF data is correct, so
            // thumbnailImage doesn't try to autorotate the image
            $im->setImageOrientation(\imagick::ORIENTATION_TOPLEFT);

            if ($im->getImageWidth() > $maxWidth || $im->getImageHeight() > $maxHeight) {
                $im->thumbnailImage($maxWidth, $maxHeight, true);
            }

            $w = $im->getImageWidth();
            $h = $im->getImageHeight();

            $im->setImageCompressionQuality(75);
            $im->stripImage();
            $im->writeImage($thumbPath);
            $im->destroy();
        }
        catch(Exception $e)
        {
            return $e->getMessage();  # TODO: MAke sure this is handled!
        }

        return array($w, $h);
    }

    public function thumb($thumb_path)
    {
        if ($this->mime == 'image/gif') {
            return null;
        }
        /* We always create a thumbnail if orientation > 1 because
            not all browsers respects EXIF orientation. The thumbnail
            will be "hard oriented".
        */
        if ($this->orientation <= 1 && $this->width <= $this->thumbWidth && $this->height <= $this->thumbHeight) {
            return null;
        }

        $dim = $this->_thumb($thumb_path, $this->thumbWidth, $this->thumbHeight);
        chmod($thumb_path, 0664);

        return array(
            'cached' => true,
            'name' => Image::$filesFolder . basename($thumb_path) . '?ts=' . time(),
            'width' => $dim[0],
            'height' => $dim[1],
        );
    }

}
