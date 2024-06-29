<?php

namespace HelpTable;


function make_li_div($id, $ty, $title, $active)
{
    $active = $active ? 'active' : '';
    $tab = array();

    $id_1 = "$ty" . "_btn_" . "$id";
    $id_2 = "$ty" . "_" . "$id";

    $tab["li"] = <<<HTML
        <li class="nav-item" role="presentation">
            <button class="nav-link $active" id="$id_1" data-bs-toggle="tab" data-bs-target="#$id_2" type="button" role="tab" aria-controls="$id_2" aria-selected="true">$title</button>
        </li>
    HTML;

    $active2 = $active ? 'show active' : '';

    $tab["div"] = <<<HTML
        <div id="$id_2" class="tab-pane fade $active2" role="tabpanel" aria-labelledby="$id_1">
            <i class="fa fa-regular fa-image" style="font-size:200px"></i>
        </div>
    HTML;

    return $tab;
}
function make_td_new($imgtitle, $numb)
{

    $id_td = "td$numb";
    $id_n  = "nametd$numb";
    $crop_row = make_li_div($id_td, "co", "Cropped", true);

    $crop_li = $crop_row['li'];
    $crop_div = $crop_row['div'];

    $img_row = make_li_div($id_td, "img", "Image", false);
    $img_li = $img_row['li'];
    $img_div = $img_row['div'];
    // ---
    $row1 = <<<HTML
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            $crop_li
            $img_li
        </ul>
        <div class="tab-content" id="myTabContent">
            $crop_div
            $img_div
        </div>
    HTML;

    $fileurl = "https://nccommons.org/wiki/File:$imgtitle";

    // $td = '<td>';
    $td = <<<HTML
        <!-- <div class="col-md-3" id="main$id_td" style="display:inline;"> -->
        <div class="col" id="main$id_td" style="display:inline;">
            <span id="crp_$id_td" idt="$id_td" hidden="hidden">$id_td</span>
            <span id="s$id_td" hidden="hidden"></span>
            <div id="card$id_td" class="card mb-1">
                <div id="cardheader$id_td" class="card-header">
                    <span id="c_input$id_td">
                        <input type="checkbox" name="chk" id="input$id_td"/>
                    </span>
                    <a href="$fileurl" target="_blank" class="small">$imgtitle</a>
                    <span name="images" id="$id_n" main_id="$id_td" hidden="hidden">$imgtitle</span>
                </div>
                <div id="cardbody$id_td" class="card-body p-1">
                    $row1
                </div>
                <div class="card-footer">
                    <span id="test$id_td" style=""></span>
                </div>
            </div>
        </div>
    HTML;
    return $td;
};
function make_table($text)
{

    $numb = 0;
    $tabnumb = 0;

    $tab = <<<HTML
        <div id="loadinfo_card" class="card">
            <div class="card-header"></div>
            <div id="loadinfo" class="card-body">
                <!-- <div class="row"> -->
                <div class="row row-cols-4">
    HTML;

    foreach ($text as $line) {
        $line = trim($line);
        if ($line == '') {
            continue;
        }

        $tabnumb = $tabnumb + 1;
        $numb = $numb + 1;

        $tab .= make_td_new($line, $numb);


        // if ($tabnumb == 4) {
        //     $tab .= '
        // </div>
        // <div class="row">';
        //     $tabnumb = 0;
        // }
    };

    $tab .= '
            </div>
        </div>
    </div>
    ';

    return $tab;
};
