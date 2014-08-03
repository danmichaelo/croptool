<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require '../vendor/autoload.php';
require '../BorderLocator.php';

use Danmichaelo\Coma\sRGB;
use PHPExiftool\Exiftool;

ini_set('memory_limit', '1024M');

// Script start
$rustart = getrusage();

$basename = '/test/test-orientation.jpg';
$fname = dirname(__FILE__) . $basename;

//$reader = PHPExiftool\Reader::create($logger);
//$metadatas = $reader->files($fname)->first();
//$Writer = Writer::create();
//$Writer->write('image.jpg', $metadatas);

/*
$exif = read_exif_data($fname);

if (isset($exif['IFD0']) && isset($exif['IFD0']['Orientation'])) {
  $exif['IFD0']['Orientation'];
  $ort = $exif['IFD0']['Orientation'];
  switch($ort)
  {

      case 3: // 180 rotate left
          $image->imagerotate($upload_path . $newfilename, 180, -1);
          break;


      case 6: // 90 rotate right
          $image->imagerotate($upload_path . $newfilename, -90, -1);
          break;

      case 8:    // 90 rotate left
          $image->imagerotate($upload_path . $newfilename, 90, -1);
          break;
  }
}
*/

$bl = new BorderLocator($fname);
$area = $bl->selection;

print 'Left: ' . $area[0] . ' px, top: ' . $area[1] . ' px, right: ' . ($bl->dim[0] - 1 - $area[2])  . ' px, bottom: ' . ($bl->dim[1] - 1 - $area[3]) . ' px';



print "<table style='font-size:80%; font-family:monospace;' border='1' cellpadding='2' cellspacing='0'>";
print '<tr><th>Pass:</th><th>Left:</th><th>Top:</th><th>Right:</th><th>Bottom:</th>';
foreach ($bl->debugData['passes'] as $n => $pass) {
  print '<tr><th>' . ($n+1) . '</th>';
  foreach (array('left','top','right','bottom') as $dir) {

    if (isset($pass[$dir])) {
      $c = $pass[$dir]['color'];
      $ic = (new sRGB($c))->inverse()->toHex();
      print '<td style="background: ' . $c . '; color: ' . $ic . '">';
      foreach ($pass[$dir]['lines'] as $lineno => $line) {
        print $lineno . ' : ' . sprintf('%.2f', floatval($line['fill'])) . ' ' . sprintf('%.2f', floatval($line['change'])) . '<br>';
      }
      print "</td>";
    } else {
      print "<td></td>";
    }
  }
  print "</tr>";
}
print '</table>';


echo 'Dimensions: ' . $bl->dim[0] . ', ' . $bl->dim[1] . " px<br>\n";
//echo 'Step: ' . $bl->step . " px<br>\n";

echo 'Selection: ' . (1 + $area[2] - $area[0]) . ',' . (1 + $area[3] - $area[1]) . "<br>\n";

// Script end
function rutime($ru, $rus, $index) {
    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
     -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
}
$ru = getrusage();
echo "This process used " . rutime($ru, $rustart, "utime") .
    " ms for its computations<br>\n";
echo "It spent " . rutime($ru, $rustart, "stime") .
    " ms in system calls<br>\n";

echo "Peak memory allocated " . (memory_get_peak_usage(true)/1024/1024) . " MB<br>\n";


$im = imagecreatefromjpeg($fname);
$pink = imagecolorallocatealpha($im, 255, 105, 180, 50);
imagefilledrectangle($im, $area[0], $area[1], $area[2], $area[3], $pink);

//$out = dirname(__FILE__) . '/test/out.jpg';
//imagepng($im, $out);
//imagedestroy($im);

echo '<canvas id="canvas" width="' . $bl->dim[0] . '" height="' . $bl->dim[1] . '"></canvas>';

?>

<script type="text/javascript">

  function draw () {

    var canvas = document.getElementById('canvas'),
  		context = canvas.getContext('2d');

    var drawRect = function () {
      context.fillStyle = "rgba(200, 20, 20, 0.5)";

      // top
      context.fillRect(0, 0, <?php echo $area[0]; ?>, <?php echo $bl->dim[1]; ?>);

      // left
      context.fillRect(<?php echo $area[2]; ?>, 0, <?php echo $bl->dim[0]; ?>, <?php echo $bl->dim[1]; ?>);

      // right
      context.fillRect(<?php echo $area[0]; ?>, 0, <?php echo $area[2] - $area[0]; ?>, <?php echo $area[1]; ?>);

      // bottom
      context.fillRect(<?php echo $area[0]; ?>, <?php echo $area[3]; ?>, <?php echo $area[2] - $area[0]; ?>, <?php echo $bl->dim[1]; ?>);

      context.fillStyle = "rgba(29, 150, 28, 0.4)";
      context.fillRect (<?php echo $area[0]; ?>, <?php echo $area[1]; ?>, <?php echo 1 + $area[2] - $area[0]; ?>, <?php echo 1 + $area[3] - $area[1]; ?>);

    };

    var loadImage = function() {
	  	var bg = new Image();
	  	bg.onload = function(){
	      context.drawImage(bg, 0, 0, <?php echo $bl->dim[0] ?>, <?php echo $bl->dim[1] ?>);
	      drawRect();
	    };
	    bg.src = "<?php echo $basename; ?>";
    };

    loadImage();
  }
  draw();

</script>
