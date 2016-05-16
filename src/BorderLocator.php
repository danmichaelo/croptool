<?php

use Danmichaelo\Coma\ColorDistance;
use Danmichaelo\Coma\sRGB;

/**
 * BorderLocator
 */
class BorderLocator
{

	/**
	 * File name
	 */
	protected $filename;

	/**
	 * ImageMagick resource
	 */
	protected $im;

	/**
	 * ColorDistance resource
	 */
	protected $colorconv;

	/**
	 * Image dimensions (width, height)
	 */
	public $dim;

	/**
	 * Selection (left,top,right,bottom) created by the border detection method
	 */
	public $selection;

	/**
	 * Provides some debug data
	 */
	public $debugData;


	function __construct($filename)
	{
		$this->filename = $filename;
		$this->im = new \Imagick($filename);

		$this->dim = array(
			$this->im->getImageWidth(),
			$this->im->getImageHeight()
		);

		$this->selection = array(0, 0, $this->dim[0] - 1, $this->dim[1] - 1);

		$this->colorconv = new ColorDistance;

		$this->detect();

		// Free memory
		$this->im->destroy();
	}

	public function getSelection()
	{
		/**
		 * Returns selection as used by jcrop_api.setSelect.
		 * [x1, y1, x2, y2] where x2 and y2 are the first pixels *outside* the selection
		 */
		return array($this->selection[0], $this->selection[1], $this->selection[2] + 1, $this->selection[3] + 1)
	}

	//scanLine(array(0,0), array(0,1));

	/**
	 * Find the deviation in color along a line defined
	 * either by a fixed $x or a fixed $y.
	 *
	 * Examples:
	 *  scanLine(10, null) will scan along the line x = 10
	 *  scanLine(null, 10) will scan along the line y = 10
	 *
	 * @param int $x Fixed x
	 * @param int $y Fixed y
	 * @param sRGB $color Color value to look for
	 * @param int $tolerance
	 * @return int
	 */
	protected function scanLine($x, $y, $step, $color, $tolerance)
	{
		if (is_null($x) && is_null($y)) {
			throw new Exception('x and y can\'t both be null. That would make a plane, not a line.');
		}
		if (!is_null($x) && !is_null($y)) {
			throw new Exception('x and y can\'t both be defined. That would make a point, not a line.');
		}
		if (is_null($color)) {
			throw new Exception('color can\'t be null.');
		}
		$length = is_null($x) ? $this->dim[0] : $this->dim[1];

		$line = array();

		for ($q = 0; $q < $length; $q += $step) {
			if (is_null($x)) {
				$c = $this->getColor($q, $y);
			} else {
				$c = $this->getColor($x, $q);
			}
			$diff = $this->colorconv->cie94($color, $c);
			if ($q == 0) {
				//print "Diff: " . $diff . ' : ';
				//print $color[0].','.$color[1].','.$color[2] . ' - ' . $c[0].','.$c[1].','.$c[2] . "<br>\n";
			}

			if ($diff > $tolerance) {
				$line[] = 0;
			} else {
				$line[] = 1;
			}
		}
		return array_sum($line) / $length * $step;
	}

	protected function getColor($x, $y)
	{
		$pixel = $this->im->getImagePixelColor($x, $y);
		$color = $pixel->getColor();
		return new sRGB($color['r'], $color['g'], $color['b']);
	}

	/**
	 * @param string $dir
	 * @param sRGB $col
	 */
	public function singleDirection($dir, $start, $end, $col)
	{

		$passNo = count($this->debugData['passes']) - 1;

		if ($passNo > 0) {
			if (!isset($this->debugData['passes'][$passNo - 1][$dir])) {
				// Data has converged
				return 0;
			}
			if ($this->debugData['passes'][$passNo - 1][$dir]['converged']) {
				// firstLineCutoff was not met at first line of last pass.
				// Data has converged.
				return 0;
		 	}
		}

		$colorTolerance = 10;
		$minFirstLineColorFill = 0.95; // Amount of the first line that must be within colorTolerance.
		$minColorFill = 0.6; // Amount of other lines that must be within colorTolerance.
		$minColorFillChange = 0.3; // Fill must change at least this value between border and non-border

		$sel = $this->selection;

		// Step size along the scan direction:
		$step = max(1, floor(($this->dim[0] * $this->dim[1]) / (1000 * 1000)));

		$step = $end > $start
			? $step
			: -$step;

		// Step size along the scan line (perpendicular to the scan direction):
		$transverseStep = ($dir == 'left' || $dir == 'right')
			? max(1, floor(($sel[3] * 0.01)))
			: max(1, floor(($sel[2] * 0.01)));

		$l = array(
			'step' => $step,
			'transverseStep' => $transverseStep,
			'color' => $col->toHex(),
			'lines' => array(),
			'converged' => false,
		);

		$top = array();
		$x = $start;
		$s = 0;
		$last_s = null;
		$xVals = range($start, $end, $step);
		$firstLine = true;

		foreach ($xVals as $x) {
			$s = ($dir == 'left' || $dir == 'right')
				? $this->scanLine($x, null, $transverseStep, $col, $colorTolerance)
				: $this->scanLine(null, $x, $transverseStep, $col, $colorTolerance);
			$l['lines'][$x] = array(
				'fill' => $s,
				'change' => is_null($last_s) ? 0 : $s - $last_s
			);
			if ($firstLine && $s < $minFirstLineColorFill) {
				break;
			}
			if ($s < $minColorFill) {
				break;
			}
			$firstLine = false;
			$top[] = $s;
			$last_s = $s;
		}

		$this->debugData['passes'][$passNo][$dir] = $l;

		if (!is_null($last_s) && abs($last_s - $s) < $minColorFillChange) {
			// Change is too gradual. Does not qualify as a border
			$this->debugData['passes'][$passNo][$dir]['converged'] = true;
			return 0;
		}

		if (count($l['lines']) == 1) {
			$this->debugData['passes'][$passNo][$dir]['converged'] = true;
			return 0;
		}


		$top = count($top) == 0 ? 0 : count($top) * $step;
		return $top;
	}

	public function singlePass()
	{
		$this->debugData['passes'][] = array();

		$sel = $this->selection;
		$w = $sel[2] - $sel[0];
		$h = $sel[3] - $sel[1];

		$leftPixelOffset = $sel[0] + max(1, round($w * 0.05)); // 5 % from left (in case of rounded borders)
		$topPixelOffset = $sel[1] + max(1, round($h * 0.05)); // 5 % from top (in case of rounded borders)

		// Find top border:
		$col = $this->getColor($leftPixelOffset, $sel[1]);
		$top = $this->singleDirection('top', $sel[1], $sel[3], $col);

		// Find bottom border:
		$col = $this->getColor($leftPixelOffset, $sel[3]);
		$bottom = $this->singleDirection('bottom', $sel[3], $sel[1], $col);

		// Find left border:
		$col = $this->getColor($sel[0], $topPixelOffset);
		$left = $this->singleDirection('left', $sel[0], $sel[2], $col);

		// Find right border:
		$col = $this->getColor($sel[2], $topPixelOffset);
		$right = $this->singleDirection('right', $sel[2], $sel[0], $col);

		// Update selection
		$x1 = $sel[0] + $left;
		$x2 = $sel[2] + $right;
		$y1 = $sel[1] + $top;
		$y2 = $sel[3] + $bottom;
		$this->selection = array($x1, $y1, $x2, $y2);

	}

	protected function detect($passes = 10)
	{
		$debugData = array('passes' => array());
		for ($i = 0; $i < $passes; $i++) {
			$this->singlePass();
		}
	}

}
