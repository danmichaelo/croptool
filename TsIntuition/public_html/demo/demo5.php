<?php
/* Config */
require_once 'demoBase.php';
$I18N = new TsIntuition( 'general' );

/* Demonstration */

echo $I18N->dashboardBacklink();
echo $I18N->getPromoBox();
echo $I18N->getFooterLine(); // defaults to TSINT_HELP_CURRENT
echo $I18N->getFooterLine( 'orphantalk2' );
echo $I18N->getFooterLine( TSINT_HELP_NONE );
echo $I18N->getFooterLine( TSINT_HELP_ALL );


/* View source */
closeDemo( __FILE__ );
