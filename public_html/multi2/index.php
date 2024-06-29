<?php

namespace MultiCrop;

require('header.php');
require('helps/table.php');
require('helps/html.php');
require('helps/info_tab.php');
require('helps/form.php');
require('helps/card.php');

use function Form\make_form;
use function Card\make_card;


$test  = $_REQUEST['test'] ?? '';
$text  = $_REQUEST['text'] ?? '';
$start = $_REQUEST['start'] ?? '';

$x = $_REQUEST['x'] ?? 168;
$y = $_REQUEST['y'] ?? 368;

$height = $_REQUEST['height'] ?? 105;
$width = $_REQUEST['width'] ?? 208;

if ($start == '') {
    make_form($x, $y, $width, $height, $text);
};

if ($text != '' && $start != '') {
    make_card($text, $x, $y, $width, $height);
};

?>

</div>
<script>
    function selects() {
        var ele = document.getElementsByName('chk');
        for (var i = 0; i < ele.length; i++) {
            if (ele[i].type == 'checkbox' && ele[i].disabled != '1')
                ele[i].checked = true;
        };
        // $('#uploaderror').css({ "display": "none" });
    };

    function deSelect() {
        var ele = document.getElementsByName('chk');
        for (var i = 0; i < ele.length; i++) {
            if (ele[i].type == 'checkbox')
                ele[i].checked = false;
        }
    };
    $(document).ready(function() {

        // let lastname = sessionStorage.getItem("username");
        // if (lastname == null || lastname == undefined || lastname == '') {
        user_login();
        // };

        async function start() {
            await get_infos();
            await make_crops();
        }
        start();
    })
</script>
</body>

</html>
