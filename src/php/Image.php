<?php

namespace CropTool;

use Imagick;
use ImagickPixel;

class Image
{
    protected $editor;
    protected $thumbWidth = 800;
    protected $thumbHeight = 800;
    protected $filePermission = 0664;  // user + group: rw, other: r

    public $path;
    public $mime;
    public $orientation;
    public $samplingFactor;
    public $width;
    public $height;
    protected $fileClass;

    public function __construct(ImageEditor $editor, string $fileClass, $path, $mime)
    {
        $this->editor = $editor;
        $this->fileClass = $fileClass;
        $this->path = $path;
        $this->mime = $mime;
        $this->load();
    }

    protected function load()
    {
        $metadata = $this->fileClass::readMetadata($this->path);

        if (!$metadata  || !$metadata['width'] || !$metadata['height']) {
            // @TODO: This should move to a safer place:
            // unlink($this->path);

            throw new \RuntimeException(
                'Invalid image? Could not read image dimensions for file: ' . $this->path . '. ' .
                'Refreshing the page might help in some cases.'
            );
        }

        $this->width = $metadata['width'];
        $this->height = $metadata['height'];
        $this->orientation = array_get($metadata, 'orientation', 0);
        $this->samplingFactor = array_get($metadata, 'samplingFactor', 0);
    }

    protected function getCropCoordinates($x, $y, $width, $height, $rotation)
    {
        // Find the size of the rectangle that can contain the rotated image
        $h0 = $this->height;
        $w0 = $this->width;
        $t = deg2rad($rotation);
        $w1 = abs($w0 * cos($t)) + abs($h0 * sin($t));
        $h1 = abs($h0 * cos($t)) + abs($w0 * sin($t));

        // Remember:
        // - Origin is in the upper left corner
        // - Positive x is rightwards
        // - Positive y is downwards

        switch ($this->orientation) {
            case Imagick::ORIENTATION_UNDEFINED:    // 0
            case Imagick::ORIENTATION_TOPLEFT:      // 1 : no rotation
                // No rotation
                $rect = array(
                    'x' => $x,
                    'y' => $y,
                    'width' => $width,
                    'height' => $height
                );
                break;

            case Imagick::ORIENTATION_BOTTOMRIGHT:  // 3 : 180 deg
                // Image rotated 180 deg
                $rect = array(
                    'x' => $w1 - $x - $width,
                    'y' => $h1 - $y - $height,
                    'width' => $width,
                    'height' => $height
                );
                break;

            case Imagick::ORIENTATION_RIGHTTOP:     // 6 : 90 deg CW
                // Image rotated 90 deg CCW
                $rect = array(
                    'x' => $y,
                    'y' => $w1 - $x - $width,
                    'width' => $height,
                    'height' => $width
                );
                break;

            case Imagick::ORIENTATION_LEFTBOTTOM:   // 8 : 90 deg CCW
                // Image rotated 90 deg CW
                $rect = array(
                    'x' => $h1 - $y - $height,
                    'y' => $x,
                    'width' => $height,
                    'height' => $width
                );
                break;

            default:
                die('Unsupported EXIF orientation');
        }


        // Make sure the selection is constrained by the image dimensions.
        // x and y should not be < 0
        if ($rect['x'] < 0) {
            $rect['width'] = $rect['width'] + $rect['x'];
            $rect['x'] = 0;
        }
        if ($rect['y'] < 0) {
            $rect['height'] = $rect['height'] + $rect['y'];
            $rect['y'] = 0;
        }

        // x + width and y + height should not be > image width and height respectively
        if ($this->flipped()) {
            $rect['width'] = min($h1 - $rect['x'], $rect['width']);
            $rect['height'] = min($w1 - $rect['y'], $rect['height']);
        } else {
            $rect['width'] = min($w1 - $rect['x'], $rect['width']);
            $rect['height'] = min($h1 - $rect['y'], $rect['height']);
        }

        // The whole selection is outside the image. No way to fix that
        if ($rect['width'] < 0 || $rect['height'] < 0) {
            throw new \RuntimeException('Invalid crop region');
        }

        return $rect;
    }

    public function flipped()
    {
        switch ($this->orientation) {
            case Imagick::ORIENTATION_UNDEFINED:    // 0
            case Imagick::ORIENTATION_TOPLEFT:      // 1 : no rotation
                return false;

            case Imagick::ORIENTATION_BOTTOMRIGHT:  // 3 : 180 deg
                return false;

            case Imagick::ORIENTATION_RIGHTTOP:     // 6 : 90 deg CW
                return true;

            case Imagick::ORIENTATION_LEFTBOTTOM:   // 8 : 90 deg CCW
                return true;

            default:
                die('Unsupported EXIF orientation');
        }
    }

    /**
     * @param $destPath
     * @param $method
     * @param $x
     * @param $y
     * @param $width
     * @param $height
     * @param $rotation
     * @return Image
     */
    public function crop($destPath, $method, $x, $y, $width, $height, $rotation)
    {
        if (file_exists($destPath)) {
            unlink($destPath);
        }

        // Get coords orientated in the same direction as the image:
        $coords = $this->getCropCoordinates($x, $y, $width, $height, $rotation);

        $this->fileClass::crop($this->path, $destPath, $method, $coords, $rotation);

        chmod($destPath, $this->filePermission);

        return new Image($this->editor, $this->fileClass, $destPath, $this->mime);
    }


    protected function genThumb($thumbPath, $maxWidth, $maxHeight)
    {
        $im = new Imagick();
        $im->readImage($this->path);

        switch ($this->orientation) {
            case Imagick::ORIENTATION_UNDEFINED:    // 0
            case Imagick::ORIENTATION_TOPLEFT:      // 1 : no rotation
                break;

            case Imagick::ORIENTATION_BOTTOMRIGHT:  // 3 : 180 deg
                $im->rotateImage(new ImagickPixel(), 180);
                break;

            case Imagick::ORIENTATION_RIGHTTOP:     // 6 : 90 deg CW
                $im->rotateImage(new ImagickPixel(), 90);
                break;

            case Imagick::ORIENTATION_LEFTBOTTOM:   // 8 : 90 deg CCW
                $im->rotateImage(new ImagickPixel(), -90);
                break;

            default:
                // we should never get here, this is checked in load() as well
                die('Unsupported EXIF orientation');
        }

        // Now that it's auto-rotated, make sure the EXIF data is correct, so
        // thumbnailImage doesn't try to autorotate the image
        $im->setImageOrientation(Imagick::ORIENTATION_TOPLEFT);

        if ($im->getImageWidth() > $maxWidth || $im->getImageHeight() > $maxHeight) {
            $im->thumbnailImage($maxWidth, $maxHeight, true);
        }

        $w = $im->getImageWidth();
        $h = $im->getImageHeight();

        $im->setImageCompressionQuality(75);
        $im->stripImage();

        $this->fileClass::saveImage($im, $thumbPath, $this->path);
        $im->destroy();

        return array($w, $h);
    }

    /**
     * @param $thumbPath
     * @return Image|null
     */
    public function thumb($thumbPath)
    {
        // Unlink first, in case a new thumb is not needed
        if (file_exists($thumbPath)) {
            unlink($thumbPath);
        }

        $mime = $this->editor->mimeFromPath($thumbPath);

        if ($mime == 'image/gif') {
            // We never create thumbnails for GIFs
            return null;
        } else if ($this->mime == 'image/tiff' or $this->orientation > 0) {
            // We always create a thumbnail
            // - if orientation > 1 because not all browsers respects EXIF orientation,
            // - or if the file is a tiff file, since most browser don't support tiff.
        } else if ($this->width <= $this->thumbWidth && $this->height <= $this->thumbHeight) {
            // Otherwise, we check if the dimensions exceeds the thumb dimensions.
            return null;
        }

        $this->genThumb($thumbPath, $this->thumbWidth, $this->thumbHeight);
        chmod($thumbPath, $this->filePermission);

        return new Image($this->editor, $this->fileClass, $thumbPath, $mime);
    }
}
