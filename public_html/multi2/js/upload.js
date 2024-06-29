
function count_up_plus_one(na_id) {
    var uu = $('#' + na_id).html();
    var u = parseInt(uu) + 1;
    $('#' + na_id).html(u.toString());
}

function upload(id, imagename) {
    return new Promise((resolve, reject) => {
        var summary = $('#s' + id).text();
        // var imagelink = $('#img' + id).attr("src");

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

                    console.log(id, imagename, 'upload', 'success');

                    $('#card' + id).removeClass("border-info");
                    $('#card' + id).addClass("border-success");
                    $('#cardbody' + id).addClass("text-success");

                    $('#test' + id).css({ "color": "green", "font-size": "20px" });
                    $('#test' + id).html('<i class="fa fa-check-circle-o"></i> uploaded');
                    $('#c_input' + id).empty();

                    count_up_plus_one("up_done");

                } else {
                    console.log(id, imagename, 'upload', 'failed');
                    $('#test' + id).html("Upload failed! " + error);
                    count_up_plus_one("up_errors");
                };
                resolve();
            },
            error: function (data) {
                console.log(id, imagename, 'upload', 'failed');
                $('#test' + id).html('error when uploading');
                count_up_plus_one("up_errors");
                resolve();
            }
        });
    });
};

function move_tabs_tab(tab, to_id) {

    var number = 0;

    // var img_row = '<div class="row">';<div class="row row-cols-4">
    var img_row = $('<div/>').addClass('row row-cols-4');

    for (var i = 0; i < tab.length; i++) {
        var id = tab[i];
        number = number + 1;

        var mainid = 'main' + id;

        var td_html = $('#' + mainid).html();

        $('#' + mainid).remove();

        // var div = $('<div/>').addClass('col-md-3').attr('id', mainid).css('display', 'inline').html(td_html);
        var div = $('<div/>').addClass('col').attr('id', mainid).css('display', 'inline').html(td_html);
        img_row.append(div);

        if (number == 4) {
            $('#' + to_id).append(img_row);
            img_row = $('<div/>').addClass('row');
            number = 0;
        }

    };
    $('#' + to_id).append(img_row);
}

function upload_t(tab) {
    console.log("upload_t:" + tab.length);
    for (var i = 0; i < tab.length; i++) {
        var id = tab[i];

        // var imagename = sessionStorage.getItem(id);
        var imagename = $("#name" + id).text();

        if (imagename == null || imagename == undefined || imagename == '') {
            $('#test' + id).html('imagename is null');
            console.log(id, 'imagename is null');
        } else {

            upload(id, imagename);
        }
    }
}

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

async function upload_all() {
    var ele = document.getElementsByName('chk');

    var checked_tab = [];
    var notchecked = [];

    for (var i = 0; i < ele.length; i++) {
        var e = ele[i];
        if (e.getAttribute('type') == 'checkbox') {
            var id = ele[i].id;
            // remove "input" from in_id
            id = id.replace('input', '');

            if (e.checked) {
                checked_tab.push(id);
            } else {
                notchecked.push(id);
            }
        }
    };

    if (ele.length == notchecked.length || checked_tab.length == 0) {
        $('#uploaderror').css({ "display": "inline" });
        return;
    }

    $("#up_all").val(checked_tab.length);
    $("#up_all").css("font-weight", "bold");

    $("#up_logo").show();
    $("#up_name").css("font-weight", "bold");

    if (notchecked.length > 0) {
        $('#imgerror_card').show();
        move_tabs_tab(notchecked, "img_error");

        // $('#toupload_card').show();
        // move_tabs_tab(checked_tab, "to_upload");

        // $('#loadinfo_card').hide();
        // $('#loadinfo_card').empty();
    }

    await upload_t(checked_tab);

    change_color('up');


};
