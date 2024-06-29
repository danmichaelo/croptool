
function setAuthorizedUser(username) {
    $('#user_login').hide();
    $('#username').html(username);
    $('#user_li').show();
    $('#user_logout').show();
    sessionStorage.setItem('username', username);
}

function user_login() {
    var url = 'https://ncc2c.toolforge.org//api/auth/user';
    if (window.location.hostname == 'localhost') {
        setAuthorizedUser("Mr. Ibrahem");
        return;
    }
    jQuery.ajax({
        async: true,
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            if (data.user) {
                setAuthorizedUser(data.user);
            }
        }
    });

};

$(document).ready(function () {
    user_login();
});
