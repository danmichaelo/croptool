<?php

namespace CropTool\File;

use CropTool\Config;
use Imagick;
use pastuhov\Command\Command;

class JpegFile extends File implements FileInterface
{
    protected $pathToJpegTran = '/usr/local/bin/jpegtran';

    public function __construct(Config $config)
    {
        $this->pathToJpegTran = $config->get('jpegtranPath');
    }

    static public function readMetadata($path)
    {
        $exif = @exif_read_data($path, 'IFD0');
        $orientation = (isset($exif) && isset($exif['Orientation'])) ? intval($exif['Orientation']) : 0;

        $image = new Imagick($path);
        $sf = explode(',', $image->getImageProperty('jpeg:sampling-factor'));
        $samplingFactor = $sf[0];

        switch ($orientation) {
            case Imagick::ORIENTATION_UNDEFINED:    // 0
            case Imagick::ORIENTATION_TOPLEFT:      // 1 : no rotation
            case Imagick::ORIENTATION_BOTTOMRIGHT:  // 3 : 180 deg
                $width = $image->getImageWidth();
                $height = $image->getImageHeight();
                break;

            case Imagick::ORIENTATION_RIGHTTOP:     // 6 : 90 deg CW
            case Imagick::ORIENTATION_LEFTBOTTOM:   // 8 : 90 deg CCW
                $width = $image->getImageHeight();
                $height = $image->getImageWidth();
                break;

            default:
                throw new \RuntimeException('Unsupported EXIF orientation "' . $orientation . '"');
        }

        $image->destroy();

        return [
            'width' => $width,
            'height' => $height,
            'orientation' => $orientation,
            'samplingFactor' => $samplingFactor,
        ];
    }

    static public function crop($srcPath, $destPath, $method, $coords, $rotation)
    {
        if ($method == 'precise') {
            return parent::crop($srcPath, $destPath, $method, $coords, $rotation);
        }

        // Lossless
        $dim = $coords['width'] . 'x' . $coords['height'] . '+' . $coords['x'] .'+' . $coords['y'];
        $rotate = '';
        if ($rotation) {
            if (!in_array($rotation, [90, 180, 270])) {
                throw new \RuntimeException('Rotation angle for lossless crop must be 90, 180 or 270.');
            }

            $rotate = '-rotate ' . $rotation;
        }
        Command::exec($this->pathToJpegTran . ' -copy all ' . $rotate . ' -crop {dim} {src} > {dest}', [
            'src' => $srcPath,
            'dest' => $destPath,
            'dim' => $dim,
        ]);
    }
}
