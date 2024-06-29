let rand_number = Math.random();
let table_json = new Map();

function loge(imgname, value, type) {
    table_json.get(imgname).set(type, value);
};

function log_all() {
    table_json['user'] = $("#username").html();
    jQuery.ajax({
        async: true,
        url: 'log.php',
        data: { a: JSON.stringify(table_json), file_name: rand_number },
        type: 'POST'
    });
};

function user_login() {
    var url = 'https://ncc2c.toolforge.org//api/auth/user';

    jQuery.ajax({
        async: true,
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            if (data.user) {
                var text = 'Authorized as <span id="username" style="color:blue;">' + data.user + '</span>';
                $('#user_login').html(text);

            }
        }
    });

};

function error_file(id, filename, Type, add) {
    var error = "<strong><i class='fa fa-exclamation-triangle'></i> Error! </strong>";

    var imageurl = 'https://nccommons.org/wiki/File:' + filename;

    if (Type == 'exist')
        error += "<a href='" + imageurl + "' target='_blank'><b>The file</b></a> is not available on nccommons.org, Please check the file name and try again.";

    if (Type != 'exist')
        error += Type;

    $('#cardbody' + id).html(error);

    $('#cardheader' + id).addClass("");
    $('#card' + id).addClass("border-danger text-danger");
    $('#input' + id).attr("disabled", "1");
}

function count_done_plus_one(na_id) {
    var uu = $('#' + na_id).html();
    var u = parseInt(uu) + 1;
    $('#' + na_id).html(u.toString());
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

function get_crop(id, imagename, params = null) {

    if (params == null)
        params = {
            y: $('#y').html(),
            x: $('#x').html(),
            width: $('#width').html(),
            height: $('#height').html(),
        }

    // ---
    if (!table_json.has(imagename)) {
        table_json.set(imagename, new Map());
    }
    // ---
    var y = params.y;
    var x = params.x;
    var width = params.width;
    var height = params.height;

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





    jQuery.ajax({
        async: true,
        url: api_url2,
        dataType: 'json',
        success: function (data) {

            loge(imagename, 'success', 'crop');
            var cropimgname = data.crop.name;
            var cropwidth = data.crop.width;
            var cropheight = data.crop.height;

            var dimintions = make_width_and_high(cropwidth, cropheight);
            var width = dimintions[0];
            var height = dimintions[1];

            var url = api_url + cropimgname;



            var img_tag = $("<img/>").attr("src", url).attr("id", 'img' + id).attr("width", width).attr("height", height).attr("alt", imagename);

            $('#' + id).html(img_tag);

            var dim = 'Cropped ' + data.dim + ' Multi-CropTool';
            $('#s' + id).html(dim);

            count_done_plus_one("done");

            $('#card' + id).addClass("border-info");
        },
        error: function (data) {

            loge(imagename, 'error', 'crop');
            error_file(id, imagename, 'when crop', 'dd');
            count_done_plus_one("done");

        }
    });
};

function get_one_file_info(id, imagename, crop = true) {
    var api_url = 'https://ncc2c.toolforge.org//';

    var params = {
        site: "nccommons.org",
        title: imagename
    };

    var api_url1 = api_url + "api/file/info?" + jQuery.param(params);

    jQuery.ajax({
        async: true,
        url: api_url1,
        dataType: 'json',
        success: function (data) {
            var err = data.error;
            if (err != null && err != undefined) {
                loge(imagename, 'error', 'exist');
                $('#test' + id).html(err);
                error_file(id, imagename, err, 'bbo');
                // error_file(id, imagename, 'when getting image info','cc');
                count_done_plus_one("info_errors");
            } else {

                loge(imagename, 'exist', 'exist');
                count_done_plus_one("info_done");

                console.log('data.title:' + data.title);

                var aa = data.thumb;
                if (aa == null) {
                    aa = data.original;
                }

                var img = aa.name;
                var awidth = aa.width;
                var aheight = aa.height;

                var dimintions = make_width_and_high(awidth, aheight);
                var width = dimintions[0];
                var height = dimintions[1];

                var img_tag = $("<img/>").attr("src", api_url + img).attr("width", width).attr("height", height).attr("alt", imagename);

                $('#home' + id).html(img_tag);

                if (crop == true) {
                    get_crop(id, imagename);
                };
            };
        },
        error: function (data) {
            var err = data.error;
            if (err == null || err == undefined) {
                err = 'when getting image info';
            }
            loge(imagename, 'error', 'exist');
            $('#test' + id).html(err);
            error_file(id, imagename, err, 'bbo');
            count_done_plus_one("info_errors");
        }
    });
};

async function get_infos() {
    var ele = document.getElementsByName('divtd');

    $("#info_all").text(ele.length);

    for (var i = 0; i < ele.length; i++) {
        var id = ele[i].id;
        var nameid = "name" + id;
        var imagename = $('#' + nameid).text();
        table_json[imagename] = new Map();
        await get_one_file_info(id, imagename, crop = true);
    };

    log_all();

};

function upload(check) {
    for (var i = 0; i < check.length; i++) {

        var id = $('#h' + check[i]).text();
        var imagename = $("#name" + id).text();

        var summary = $('#s' + id).text();
        var imagelink = $('#img' + id).attr("src");

        var api_url = 'https://ncc2c.toolforge.org//';

        var params = {
            site: "nccommons.org",
            title: imagename,
            overwrite: "overwrite",
            comment: summary,
            store: !0
        };

        var api_url1 = api_url + "api/file/publish?";

        jQuery.ajax({
            async: true,
            url: api_url1,
            data: params,
            type: 'POST',
            success: function (data) {

                var result = data.result;
                var error = data.error;
                if (result == "Success") {

                    loge(imagename, 'success', 'upload');

                    $('#card' + id).removeClass("border-info");
                    $('#card' + id).addClass("border-success");
                    $('#cardbody' + id).addClass("text-success");

                    $('#test' + id).css({ "color": "green", "font-size": "20px" });
                    $('#test' + id).html('<i class="fa fa-check-circle-o"></i> uploaded');


                } else {
                    loge(imagename, 'failed', 'upload');
                    $('#test' + id).html("Upload failed! " + error);
                };
            },
            error: function (data) {
                loge(imagename, 'failed', 'upload');
                $('#test' + id).html('error when uploading');
            }
        });

        var uploaddone = $('#uploaddone').html();
        uploaddone = parseFloat(uploaddone) + 1;
        $('#uploaddone').html(uploaddone);

    };
};

async function upload_all() {
    var ele = document.getElementsByName('chk');

    var checked = [];
    var notchecked = [];

    for (var i = 0; i < ele.length; i++) {
        var e = ele[i];
        if (e.type == 'checkbox') {
            var id = ele[i].id;
            if (e.checked == true)
                checked.push(id);
            if (e.checked == false)
                notchecked.push(id);
        }
    };

    if (ele.length == notchecked.length) {
        $('#uploaderror').css({ "display": "inline" });
        return;
    }

    $('#img_error_card').show();
    $('#to_upload_card').show();

    $("#working").html('Uploading <span id="uploaddone">0</span>/' + checked.length);

    $("#up_all").html(checked.length);

    var img_error = '';
    var number = 0;

    img_error += '<div class="row">';
    for (var i = 0; i < notchecked.length; i++) {
        number = number + 1;

        var id = $('#h' + notchecked[i]).html();
        var mainid = 'main' + id;

        var td_html = $('#' + mainid).html();

        img_error += '<div class="col-md-3" div id="' + mainid + '" style="display:inline;">';
        img_error += td_html;
        img_error += '</div>';


        if (number == 4) {
            img_error += '</div>';
            img_error += '<div class="row">';
            number = 0;
        }

    };
    img_error += '</div>';
    $('#img_error').html(img_error);

    var to_uploa = '<div class="row">';
    var numb = 0;

    for (var i = 0; i < checked.length; i++) {
        numb = numb + 1;

        var id = $('#h' + checked[i]).html();
        var mainid = 'main' + id;

        var td_html = $('#' + mainid).html();

        to_uploa += '<div class="col-md-3" div id="' + mainid + '" style="display:inline;">';
        to_uploa += td_html;
        to_uploa += '</div>';


        if (numb == 4) {
            to_uploa += '</div>';
            to_uploa += '<div class="row">';
            numb = 0;
        }

    };
    to_uploa += '</div>';

    $('#to_upload').html(to_uploa);

    $('#loadinfo_card').hide();
    $('#loadinfo_card').empty();

    await upload(checked);

    log_all();

};
