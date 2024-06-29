function count_crop_plus_one(na_id) {
    var uu = $('#' + na_id).html();
    var u = parseInt(uu) + 1;
    $('#' + na_id).html(u.toString());
}

function error_file(id, filename, Type) {
    $('#test' + id).html(Type);

    var error = "<strong><i class='fa fa-exclamation-triangle'></i> Error! </strong>";

    error += Type;

    $('#cardbody' + id).html(error);

    $('#card' + id).addClass("border-danger text-danger");
    $('#input' + id).attr("disabled", "1");
    $(".new_textarea").append('\n' + filename);
}
function make_width_and_high(width, height) {
    var w = parseFloat(width);
    var h = parseFloat(height);
    var ratio = w / h;
    var new_width = 0;
    var new_height = 0;
    if (ratio > 1) {
        new_width = 220;
        new_height = 220 / ratio;
    } else {
        new_width = 220 * ratio;
        new_height = 220;
    }
    return [new_width, new_height];
};

function crop_error(id, imagename, data) {
    console.log(imagename, 'crop', 'error');
    error_file(id, imagename, 'when crop');
    count_crop_plus_one("crop_errors");
    // reject(err);
}
function crop_done(id, imagename, data) {
    var api_url = 'https://ncc2c.toolforge.org//';

    console.log(imagename, 'crop', 'success');
    var cropimgname = data.crop.name;
    var cropwidth = data.crop.width;
    var cropheight = data.crop.height;

    var dimintions = make_width_and_high(cropwidth, cropheight);
    var width = dimintions[0];
    var height = dimintions[1];

    var url = api_url + cropimgname;

    var img_tag = $("<img/>").attr("src", url).attr("id", 'img' + id).attr("width", width).attr("height", height).attr("alt", imagename);

    $('#co_' + id).empty();
    $('#co_' + id).append(img_tag);

    var dim = 'Cropped ' + data.dim + ' Multi-CropTool';
    $('#s' + id).html(dim);
    count_crop_plus_one("crop_done");
    $('#card' + id).addClass("border-info");
}

function get_crop(id, imagename, callback_true, callback_err) {

    return new Promise((resolve, reject) => {

        var y = $('#y').html();
        var x = $('#x').html();
        var width = $('#width').html();
        var height = $('#height').html();

        var api_url = 'https://ncc2c.toolforge.org//';

        var params2 = {
            site: "nccommons.org",
            title: imagename,
            y: y,
            x: x,
            width: width,
            height: height,
            method: 'precise',
            rotate: '0'
        };
        var api_url2 = api_url + "api/file/crop?" + jQuery.param(params2);
        console.log(api_url2);
        // count_crop_plus_one("crop_all");

        jQuery.ajax({
            async: true,
            url: api_url2,
            dataType: 'json',
            success: function (data) {
                callback_true(id, imagename, data);
                resolve();
            },
            error: function (data) {
                callback_err(id, imagename, data);
                resolve();
            }
        });
    });
};


function change_color(id) {
    $("#" + id + "_logo").hide();
    $("#" + id + "_logo_done").show();

    var done = $('#' + id + '_done').text();
    var all = $('#' + id + '_all').text();
    if (done == all) {
        // change font to green
        $('#' + id + '_done').css('color', 'green');
        $('#' + id + '_all').css('color', 'green');
    };
    if (done == "0") {
        $("#" + id + "_logo_done").hide();
        $("#" + id + "_logo_err").show();
        // change font to red
        $('#' + id + '_row').css('color', 'red');
    }
}

async function make_crops() {

    $("#crop_logo").show();
    $("#crop_name").css("font-weight", "bold");

    var to_crop = document.getElementsByName('tocrop');

    $("#crop_all").text(to_crop.length);
    // $("#crop_all").html($("#info_done").html());

    $("#crop_all").css("font-weight", "bold");

    if (to_crop.length == 0) {
        $("#crop_logo").hide();
        $("#crop_logo_err").show();
        return;
    }
    // do get crop for to_crop elements
    for (var i = 0; i < to_crop.length; i++) {
        var id = to_crop[i].getAttribute("idt");
        // console.log(JSON.stringify(to_crop[i]));

        var imagename = $("#name" + id).text();
        // var imagename = sessionStorage.getItem(id);

        console.log("make_crops: id:" + id + " imagename:" + imagename);
        if (imagename != null && imagename != undefined && imagename != '') {
            await get_crop(id, imagename, crop_done, crop_error);
        }
    };

    change_color('crop');
    var done = $("#crop_done").text()
    if (done == "0") {
        $('#uploaderror').text("No images to upload");
        $('#uploaderror').css({ "display": "inline" });
    } else {
        $('#upload_icon').removeAttr('disabled');
        $("#up_all").text(done);
        $("#up_all").css("font-weight", "bold");
    }
}
