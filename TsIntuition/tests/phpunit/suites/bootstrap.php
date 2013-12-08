<?php

// BaseTool
require_once __DIR__ . '/../../../includes/libs/ts-krinkle-basetool/InitTool.php';

// TsIntuition classes
require_once __DIR__ . '/../../../ToolStart.php';

class IntuitionTestCase extends PHPUnit_Framework_TestCase {

	protected $i18n;

	protected $live = array();

	protected function setUp() {
		parent::setUp();

		$this->i18n = new TsIntuition( 'general' );
		$this->live['SERVER'] = $_SERVER;
	}

	protected function tearDown() {
		$_SERVER = $this->live['SERVER'];
		unset( $this->i18n );

		parent::tearDown();
	}
}
