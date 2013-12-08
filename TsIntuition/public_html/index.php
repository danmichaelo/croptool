<?php
/**
 * Main index file of the TsIntuition Dashboard.
 *
 * This file outputs the interface to set settings for TsIntuition.
 *
 * @copyright 2011-2013 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package TsIntuition
 */


/**
 * Setup
 * -------------------------------------------------
 */

// Load BaseTool
$initPath = '../../ts-krinkle-basetool';
if ( !is_readable( $initPath ) )  {
	$initPath = dirname( __DIR__ ) . '/includes/libs/ts-krinkle-basetool';
}
require_once $initPath . '/InitTool.php';

// Load Intuition
require_once dirname( __DIR__ ) . '/ToolStart.php';

// Initialize Intuition
$I18N = new TsIntuition( array(
	'domain' => 'TsIntuition',
	'mode' => 'dashboard',
) );

// Load all domains so we can get some statistics later on and
// make sure "getAvailableLangs" is complete
foreach ( $I18N->getAllRegisteredDomains() as $domainKey => $domainInfo ) {
	$I18N->loadTextdomain( $domainKey );
}

// Initialize BaseTool
$Tool = BaseTool::newFromArray( array(
	'displayTitle'	 => $I18N->msg( 'fullname' ),
	'krinklePrefix'	 => false,
	'remoteBasePath' => $I18N->dashboardHome,
	'localBasePath'	 => $I18N->localBaseDir,
	'revisionId'	 => $I18N->version,
	'styles'		 => array( 'main.css' ),
) );
$Tool->setSourceInfoGithub( 'Krinkle', 'TsIntuition', dirname( __DIR__ ) );

/* Load Scripts & Styles */

// jQuery UI
$jqueryui = $kgConf->getJQueryUI();
$Tool->addScripts( $jqueryui['scripts'] );
$Tool->addStyles( $jqueryui['styles'] );

/* Add initial stuff to <head> and <body> */
$Tool->doHtmlHead();
$Tool->doStartBodyWrapper();


/**
 * Tool settings
 * -------------------------------------------------
 */
$toolSettings = array(
	'tabs' => array(),
);


/**
 * Post actions
 * -------------------------------------------------
 */
if ( isset( $_POST['action'] ) ) {

	switch ( $_POST['action'] ) {
		case 'prefset':
			// Set a 30-day, then redirect to index
			$I18N->setCookie( 'userlang', $_POST['fpLang'] );
			$I18N->redirectTo( $Tool->remoteBasePath, 302 );
			break;
	}
}


/**
 * Get actions
 * -------------------------------------------------
 */
if ( isset( $_GET['action'] ) ) {

	switch ( $_GET['action'] ) {
		case 'clearcookies':
			$I18N->wipeCookies();
			$I18N->redirectTo( $Tool->generatePermalink( array( 'msg' => 2 ) ), 302 );
			break;
		case 'renewcookies':
			$I18N->renewCookies();
			$I18N->redirectTo( $Tool->generatePermalink( array( 'msg' => 3 ) ), 302 );
			break;
	}
}

/**
 * Custom return to
 * -------------------------------------------------
 */
// Tools can pass returnto and returntoquery parameters
// to redirect visitors back to them after setting, changing
// or doing something (eg. clearcookies, renewcookies or prefset)
if ( $I18N->isRedirecting() ) {
	$returnTo = $kgReq->getVal( 'returnto' );
	$returnToQuery = $kgReq->getVal( 'returntoquery' );
	if ( TsIntuitionUtil::nonEmptyStr( $returnTo ) ) {
		if ( TsIntuitionUtil::nonEmptyStr( $returnToQuery ) ) {
			$returnToQuery = '?' . urldecode( $returnToQuery );
		} else {
			$returnToQuery = '';
		}
		$I18N->redirectTo( "//{$_SERVER['SERVER_NAME']}$returnTo$returnToQuery", 302 );
	}
}


$I18N->doRedirect();

/**
 * Main content output
 * -------------------------------------------------
 */
$Tool->addOut( _g( 'welcome' ), 'h2' );

// Messages ?
if ( isset( $_GET['msg'] ) ) {
	switch ( $_GET['msg'] ) {
		case 2:
			$Tool->addOut(
				$I18N->msg( 'clearcookies-success' ),
				'div',
				array( 'class' => 'msg ns' )
			);
			break;
		case 3:
			$Tool->addOut(
				$I18N->msg( 'renewcookies-success', array( 'variables' => array( '30 ' . _g( 'days', array(
					'parsemag' => true,
					'variables' => array( 30 )
				) ) ) ) ),
				'div',
				array( 'class' => 'msg ns success' )
			);
			break;
	}
}

$Tool->addOut( '<div id="tsint-dashboard">' );

// Cookie has already been set, show "current-settings" box
if ( $I18N->hasCookies() ) {

	$lifetime = $I18N->getCookieLifetime();
	$after = '';
	$renew = ' (' . kfTag( $I18N->msg( 'renew-cookies' ), 'a', array(
		'href' => $Tool->generatePermalink( array( 'action' => 'renewcookies' ) )
	) ) .')';

	// 29+ days
	if ( $lifetime > 29 * 24 * 3600 ) {
		$class = 'perfect';
		$number = floor( $lifetime / 3600 / 24 / 7 );
		$time = $number . '+ ' . _g( 'weeks', array(
			'parsemag' => true, 'variables' => array( $number )
		) );

	// 10+ days
	} elseif ( $lifetime > 10 * 24 * 3600 ) {
		$class = 'good';
		$number = floor( $lifetime / 3600 / 24 );
		$time = $number . '+ ' . _g( 'days', array(
			'parsemag' => true, 'variables' => array( $number )
		) );
		$after = $renew;

	// 1+ day
	} elseif ( $lifetime > 24 * 3600 ) {
		$class = 'bad';
		$number = floor( $lifetime / 3600 / 24 );
		$time = $number . '+ ' . _g( 'days', array(
			'parsemag' => true, 'variables' => array( $number )
		) );
		$after = $renew;

	// Less than a day
	} else {
		$class = 'worst';
		$number = ceil( $lifetime / 3600 );
		$time = '<' . $number . '+ ' . _g( 'hours', array(
			'parsemag' => true, 'variables' => array( $number )
		) );
		$after = $renew;

	}

	$Tool->addOut(
		'<div id="tab-currentsettings"><form class="cleanform"><fieldset>'
	.	kfTag( $I18N->msg( 'current-settings' ) . _g( 'colon-separator' ) . ' ', 'legend' )
	.	'<div class="inner">'
	.	kfTag( $I18N->msg( 'current-language' ) . _g( 'colon-separator' ) . ' ', 'label' )
	.	kfTag( '', 'input', array( 'value' => $I18N->getLangName(), 'readonly' => 'readonly' ) )
	.	' ('
	.	kfTag( $I18N->msg( 'clear-cookies' ), 'a', array(
			'href' => $Tool->generatePermalink( array( 'action' => 'clearcookies' ) )
		) )
	.	')<br/>'
	.	kfTag( $I18N->msg( 'cookie-expiration' ) . _g( 'colon-separator' ), 'label' )
	.	kfTag( '', 'input', array(
			'value' => $time,
			'class' => "cookie-health $class",
			'readonly' => true
		) )
	.	$after
	.	'<br/>'
	.	'</div></fieldset></form></div><!-- #tab-currentsettings -->'
	);
	$toolSettings['tabs']['#tab-currentsettings'] = $I18N->msg( 'tab-overview' );


}

// Settings form
// XXX: Quick way to build the form
$dropdown = '<select name="fpLang">';
$selected = ' selected';
foreach ( $I18N->getAvailableLangs( 'any' ) as $langCode => $langName ) {
	$attr = $langCode == $I18N->getLang() ? $selected : '';
	$dropdown .= '<option value="' . $langCode . '"' . $attr . '>'
		. "$langCode - $langName"
		. '</option>';
}
$dropdown .= '</select>';

$form = '<div id="tab-settingsform">
	<form action="' . $Tool->remoteBasePath . '" method="post" class="cleanform">
	<fieldset><legend>' . $I18N->msg( 'settings-legend' ) . '</legend><div class="inner">

	<label>' . _html( 'choose-language' ) . _g( 'colon-separator' ) . '</label>
	' . $dropdown . '
	<br/>

	<input type="hidden" name="action" value="prefset"/>
	<input type="hidden" name="returnto" value="' .
		htmlspecialchars( $kgReq->getVal( 'returnto' ) ) . '"/>
	<input type="hidden" name="returntoquery" value="' .
		htmlspecialchars( $kgReq->getVal( 'returntoquery' ) )  . '"/>
	<label></label>
	<input type="submit" nof value="' . _html( 'form-submit', 'general' ) . '"/>
	<br/>

</div></fieldset>
</form>
</div>';

$Tool->addOut( $form );
$toolSettings['tabs']['#tab-settingsform'] = $I18N->msg('tab-settings');


// About tab
$about = '<div id="tab-about">';

$about .= '<a href="//translatewiki.net/wiki/Translating:Toolserver">'
	.	Html::element( 'img', array(
		'src' => '//translatewiki.net/w/i.php?title=Special:TranslationStats&graphit=1&preview=&'
			. 'count=edits&scale=weeks&days=30&width=520&height=400&group=tsint-0-all',
		'width' => 520,
		'height' => 400,
		'alt' => '',
		'class' => 'floatRight'
		))
	.	'</a>';
$about .= 'Technical documentation: <a href="//wiki.toolserver.org/view/Toolserver_Intuition">'
	. 'wiki.toolserver.org/view/Toolserver_Intuition</a>'
	. '<div class="tab-paragraph-head">' . $I18N->msg( 'usage' ) . '</div><ul>';
foreach ( $I18N->getAllRegisteredDomains() as $domainKey => $domainFile ) {
	$domainInfo = $I18N->getDomainInfo( $domainKey );
	$title = $I18N->msg( 'title', $domainKey, /* fallback = */ $domainKey );
	if ( isset( $domainInfo['url'] ) ) {
		$about .= '<li><a href="'
			. htmlspecialchars( $domainInfo['url'] )
			. '"><strong>' . htmlspecialchars( $title )
			. '</strong>'
			. '</a></li>';
	}
}
$about .= '</ul><div style="clear: both;"></div></div><!-- /#tab-about -->';

$Tool->addOut( $about );
$toolSettings['tabs']['#tab-about'] = $I18N->msg('tab-about');
$toolSettings['tabs']['demo/demo1.php'] = $I18N->msg('tab-demo');


$Tool->addOut( '</div><!-- /#tsint-dashboard -->' );


/**
 * JavaScript init
 * -------------------------------------------------
 */
$script[] = '$(document).ready(function(){';
$script[] = '$("#tsint-dashboard").prepend(\'<ul>';
foreach ( $toolSettings['tabs'] as $tabID => $tabName ) {
	$script[] = "<li><a href=\"$tabID\">$tabName</a></li>";
}
$script[] = '</ul>\');';
$script[] = '$("#tsint-dashboard").tabs({
	select: function(event, ui) {
		var url = $.data(ui.tab, "load.tabs");
		if( url ) {
			window.open(url);
			return false;
		}
		return true;
	}
});';
$script[] = '});';

$Tool->addOut( '<script>' . implode( '', $script ) . '</script>' );


/**
 * Close up
 * -------------------------------------------------
 */
$Tool->flushMainOutput();
