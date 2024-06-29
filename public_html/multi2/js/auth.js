
function setAuthorizedUser(username) {
    var text = 'Authorized as <span id="username" style="color:blue;">' + username + '</span>';
    $('#user_login').html(text);
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
