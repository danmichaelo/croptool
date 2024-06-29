<?php

namespace InfoTab;

function generate_row($id_prefix, $name, $errors = 0, $done = 0, $all = 0)
{
    return <<<HTML
    <tr id="{$id_prefix}_row">
        <td>
            <span id="{$id_prefix}_logo" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display:none;"></span>
            <span id="{$id_prefix}_logo_done" class="fa fa-check text-success" aria-hidden="true" style="display:none;"></span>
            <span id="{$id_prefix}_logo_err" class="fa fa-times text-danger" aria-hidden="true" style="display:none;"></span>
        </td>
        <td>
            <span id="{$id_prefix}_name">$name</span>
        </td>
        <td>
            <span id="{$id_prefix}_errors">$errors</span>
        </td>
        <td>
            <span id="{$id_prefix}_done">$done</span>
        </td>
        <td>
            <span id="{$id_prefix}_all">$all</span>
        </td>
    </tr>
    HTML;
}

function make_info_table($coun)
{
    // Generating table rows
    $info_row = generate_row('info', 'Info', 0, 0, $coun);
    $crop_row = generate_row('crop', 'Cropping');
    $up_row = generate_row('up', 'Uploading');

    // Assembling the table
    $table_content = <<<HTML
    <table id="myTable" class="table compact table-striped table-sm">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Errors</th>
                <th>Done</th>
                <th>All</th>
            </tr>
        </thead>
        <tbody>
            $info_row
            $crop_row
            $up_row
        </tbody>
    </table>
    HTML;

    // Wrapping the table in a card
    $card_content = <<<HTML
    <div class="card">
        <div class="card-body px-1 py-0">
            $table_content
        </div>
    </div>
    HTML;

    return $card_content;
}
