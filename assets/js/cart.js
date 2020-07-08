function setCookie(dataObj, value, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    value = JSON.stringify(value);
    document.cookie = dataObj + "=" + value + ";" + expires + ";path=/";
}

function getCookie(dataObj) {
    var name = dataObj + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {

            let value = c.substring(name.length, c.length);
            value = JSON.parse(value);
            return value;
        }
    }
    return [];
}
$(document).ready(function() {

})