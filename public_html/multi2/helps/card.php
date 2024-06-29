<?php

namespace Card;

use function HelpTable\make_table;
use function HelpHTML\group_input;
use function InfoTab\make_info_table;

function make_errors_form($x, $y, $width, $height)
{
    return <<<HTML
        <form action="index.php" method="POST" target="_blank">
            <input id="x" id="x" value="$x" hidden>
            <input id="y" id="y" value="$y" hidden>
            <input id="width" id="width" value="$width" hidden>
            <input id="height" id="height" value="$height" hidden>
            <textarea class="new_textarea" id="text" name="text" cols="100" rows="15" hidden>

            </textarea>
            <input id="restart" type="submit" class="btn" value="Re Start Errors" disabled>
        </form>
    HTML;
}

function make_card($text, $x, $y, $width, $height)
{
    $errors_line = make_errors_form($x, $y, $width, $height);

    $text = str_replace("File:", "", $text);
    $text = str_replace("|", "", $text);

    $text = explode("\n", $text);

    // trim all items
    $text = array_map('trim', $text);

    // remove duplicate
    $text = array_unique($text);

    $all_co = count($text);
    $info_table = make_info_table($all_co);

    $lal = "<span id='y' hidden='hidden'>$y</span>";
    $lal .= "<span id='x' hidden='hidden'>$x</span>";
    $lal .= "<span id='width' hidden='hidden'>$width</span>";
    $lal .= "<span id='height' hidden='hidden'>$height</span>";

    echo $lal;

    $x_input = group_input('x', 'xx', $x, true);
    $y_input = group_input('y', 'yy', $y, true);
    $width_input = group_input('width', 'ww', $width, true);
    $height_input = group_input('height', 'hh', $height, true);

    echo <<<HTML
    <div class="row">
        <div class="col-md-4">
            $info_table
        </div>
        <div class="col-md-8">
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
                        <div class="col-md-2">
                            <button type="button" class="btn btn-outline-primary" onclick="selects()">Select all</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-outline-primary" onclick="deSelect()">Deselect all</button>
                        </div>
                        <div class="col-md-2">
                            <button id="upload_icon" type="button" class="btn btn-outline-primary" onclick="upload_all()" disabled>Upload</button>
                        </div>
                        <div class="col-md-3">
                            <div>
                                $errors_line
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div id="uploaderror" class="alert h5" style="color:red;display:none;">No images selected.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    HTML;

    // $table = '<form>';
    $table = make_table($text);

    echo $table;

    echo '<!-- end of loadinfo -->';

    $toto = <<<HTML
        <div id="toupload_card" class="card">
            <div class="card-header">Files ready to upload:</div>
            <div id="to_upload" class="card-body">
            </div>
        </div>
    HTML;

    echo <<<HTML
        <div id="imgerror_card" class="card">
            <div class="card-header">
                Files error:
            </div>
            <div id="img_error" class="card-body">
            </div>
        </div>
    HTML;
}
