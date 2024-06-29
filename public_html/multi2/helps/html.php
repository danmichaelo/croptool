<?php

namespace HelpHTML;

function group_input($name, $id, $value, $only_read = false)
{
    $read_only = ($only_read) ? 'readonly="true"' : '';
    return <<<HTML
    <div class="col-md">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">$name</span>
            </div>
            <input class="form-control w-50" name="$id" id="$id" $read_only value="$value">
        </div>
    </div>
    HTML;
}
