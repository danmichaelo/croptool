<?php
class TsIntuitionUtilTest extends PHPUnit_Framework_TestCase {

	public static function provideNonEmptyStr() {
		return array(
			array( true, 'one' ),
			array( true, ' ' ),
			array( false, '' ),
			array( false, null ),
			array( false, 0 ),
			array( false, 2 ),
			array( true, '0' ),
			array( true, '2' ),
			array( false, array() ),
			array( false, array( 'x' ) ),
		);
	}

	/**
	 * @dataProvider provideNonEmptyStr
	 */
	public function testNonEmptyStr( $bool, $input ) {
		$this->assertSame(
			TsIntuitionUtil::nonEmptyStr( $input ),
			$bool
		);
	}

	public static function provideNonEmptyStrs() {
		return array(
			array(
				false,
				array( 'x', '', 'y' ),
			),
			array(
				true,
				array( 'x', 'y' ),
			),
		);
	}

	/**
	 * @dataProvider provideNonEmptyStrs
	 */
	public function testNonEmptyStrs( $bool, $inputArgs ) {
		$this->assertSame(
			call_user_func_array( 'TsIntuitionUtil::nonEmptyStrs', $inputArgs ),
			$bool
		);
	}

	public static function provideAcceptLanguages() {
		return array(
			array( '',
				array(),
				'Empty Accept-Language header',
			),
			array( 'en',
				array( 'en' => 1 ),
				'One language',
			),
			array( 'en, ar',
				array( 'en' => 1, 'ar' => 1 ),
				'Two languages listed in appearance order.',
			),
			array( 'zh-cn,zh-tw',
				array( 'zh-cn' => 1, 'zh-tw' => 1 ),
				'Two equally prefered languages, listed in appearance order per rfc3282. Checks c9119',
			),
			array( 'es, en; q=0.5',
				array( 'es' => 1, 'en' => 0.5 ),
				'Spanish as first language and English and second',
			),
			array( 'en; q=0.5, es',
				array( 'es' => 1, 'en' => 0.5 ),
				'Less prefered language first',
			),
			array( 'fr, en; q=0.5, es',
				array( 'fr' => 1, 'es' => 1, 'en' => 0.5 ),
				'Three languages',
			),
			array( 'en; q=0.5, es',
				array( 'es' => 1, 'en' => 0.5 ),
				'Two languages',
			),
			array( 'en, zh;q=0',
				array( 'en' => 1 ),
				'Chinese to me',
			),
			array( 'es; q=1, pt;q=0.7, it; q=0.6, de; q=0.1, ru;q=0',
				array( 'es' => 1, 'pt' => 0.7, 'it' => 0.6, 'de' => 0.1 ),
				'Preference for romance languages',
			),
			array( 'en-gb, en-us; q=1',
				array( 'en-gb' => 1, 'en-us' => 1 ),
				'Two equally prefered English variants',
			),
			array(
				'da, en-gb;q=0.8, en;q=0.7',
				array( 'da' => 1, 'en-gb' => 0.8, 'en' => 0.7 ),
				'Example from http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4',
			)
		);
	}

	/**
	 * @dataProvider provideAcceptLanguages
	 */
	public function testGetAcceptableLanguages( $data, $result, $message ) {
		$this->assertEquals(
			TsIntuitionUtil::getAcceptableLanguages( $data ),
			$result,
			$message
		);
	}

}
