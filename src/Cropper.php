<?php

use PHPExiftool\Exiftool,
    Monolog\Logger;

/**
 * Class that does the actual cropping
 */
class Cropper
{

	protected $pathToJpegTran;

	function __construct($pathToJpegTran = '/usr/local/bin/jpegtran', $filesFolder = 'files/')
	{
		$this->pathToJpegTran = $pathToJpegTran;
        $this->filesFolder = $filesFolder;
	}

	public function crop($src_path, $dest_path, $method, $new_x, $new_y, $new_width, $new_height)
	{

		$dim = $new_width . 'x' . $new_height . '+' . $new_x .'+' . $new_y;

        if (file_exists($dest_path)) {
            unlink($dest_path);
        }

        $res = array(
            'lossless' => false
        );

        if ($method === 'lossless') {
            $cmd = sprintf('%s -copy all -crop %s %s > %s',
                $this->pathToJpegTran,
                escapeshellarg($dim),
                escapeshellarg($src_path),
                escapeshellarg($dest_path)
            );
            $cmd_res = exec($cmd, $output, $return_var);
            $res['lossless'] = true;

        } else if ($method === 'precise') {
            #$cmd = 'convert ' . escapeshellarg($src_path) . ' -crop ' . escapeshellarg($dim) . ' ' . escapeshellarg($dest_path);
            #$cmd_res = exec($cmd, $output, $return_var);

            $targ_w = $targ_h = 150;
            $jpeg_quality = 90;

            $img_r = imagecreatefromjpeg($src_path);
            $dst_r = imagecreatetruecolor($new_width, $new_height);

            list($width, $height) = getimagesize($src_path);

            imagecopyresampled($dst_r, $img_r, 0, 0, $new_x, $new_y, $new_width, $new_height, $new_width, $new_height);
            imagejpeg($dst_r, $dest_path, $jpeg_quality);

            #die("Output: $output, return var: $return_var");
            #
            $cmd_res = "";
            $return_var = 0;

        } else {
            die('unknown crop method');
        }

        # Copy metadata using exiftool
        $logger = new Logger('exiftool');
        $exiftool = new Exiftool($logger);

        // Reference: http://owl.phy.queensu.ca/~phil/exiftool/exiftool_pod.html
        $exiftool->executeCommand(sprintf('-overwrite_original -quiet -TagsFromFile %s -all:all %s',
            escapeshellarg($src_path),
            escapeshellarg($dest_path)
        ));
        // TODO: Catch exception

        chmod($dest_path, 0664);

        if ($cmd_res != "" || $return_var != 0) {
            $res['error'] = $cmd_res;
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
        } else {
            $s = getimagesize($dest_path);
            $res['name'] = $this->filesFolder . basename($dest_path) . '?ts=' . time();
            $res['width'] = $s[0];
            $res['height'] = $s[1];
        }

        return $res;
	}

}