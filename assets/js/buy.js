function setCookie(dataObj, user, value, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 10000));
    var expires = "expires=" + d.toGMTString();
    value = JSON.stringify(value);
    document.cookie = dataObj + '_' + user + "=" + value + ";" + expires + ";path=/";
}

function getCookie(dataObj, user) {
    var name = dataObj + '_' + user + "=";
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
    var user = $('#id_user').data('datac');

    $(".btnBuy").click(function() {
        if (user == '') {
            alert("Please login before add to cart!");
            return false;
        }
        let flag = false;
        let id = $(this).data('datac');
        let cart = getCookie('cart', user);
        if (cart.length == 0) {
            cart.push([id, 1]);
        } else {
            for (let i = 0; i < cart.length; i++) {
                if (cart[i][0] == id) {
                    cart[i][1]++;
                    flag = true;
                    break;
                }
            }
            if (!flag) {
                cart.push([id, 1]);
            }
        }
        //update cookie
        setCookie('cart', user, cart, 1);
        alert("success");

    })
})