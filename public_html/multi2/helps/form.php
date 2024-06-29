<?php

namespace Form;

use function HelpHTML\group_input;

$files = '
Gallbladder adenocarcinoma (Radiopaedia 84615-100022 Axial 103).jpg
Gallbladder adenocarcinoma (Radiopaedia 84615-100022 Axial 104).jpg
Gallbladder adenocarcinoma (Radiopaedia 84615-100022 Axial 105).jpg
(DermNet NZ pachydermodactyly-4).jpg
(DermNet NZ pachydermodactyly-5).jpg
Test11.jpg
Gallbladder adenocarcinoma (Radiopaedia 84615-100022 Axial 106).jpg
Gallbladder adenocarcinoma (Radiopaedia 84615-100022 Axial 107).jpg
';
function make_form($x, $y, $width, $height, $text)
{
    global $files;
    $text2 = ($text == '') ? $files : $text;

    $test = $_REQUEST['test'] ?? '';

    $test_input = '';
    if ($test != '') {
        $test_input = '<input name="test" id="test" value="1" hidden>';
    };
    if (isset($_REQUEST['newta'])) {
        $test_input .= '<input name="newta" id="newta" value="1" hidden>';
    };
    $x_input = group_input('left (x)', 'x', $x);
    $y_input = group_input('top (y)', 'y', $y);
    $width_input = group_input('width:', 'width', $width);
    $height_input = group_input('height:', 'height', $height);

    echo <<<HTML
        <form action="index.php" method="POST">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        $x_input
                        $y_input
                        $height_input
                        $width_input
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <label>files:</label><br>
                            <textarea cols="100" rows="15" name="text">$text2</textarea>
                        </div>
                    </div>
                    $test_input
                    <input type="submit" class="btn btn-outline-primary" name="start" value="start">
                </div>
            </div>
        </form>
    HTML;
}
