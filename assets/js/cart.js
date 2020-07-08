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

calcTotalPrice = () => {
    let subTotal = 0;
    let Total = 0;
    let shipFee = 0;

    $('tbody tr').each(function() {
        let id = $(this).attr('id');
        let price = parseInt($('.priceProduct.' + id).text());
        let qtt = parseInt($('.qty.' + id).val());
        let val = price * qtt;
        subTotal += val;
    });

    console.log(subTotal);
    Total = subTotal + shipFee;
    $('#subTotal').html(subTotal + ' VND');
    $('#Total').html(Total + ' VND');
}

$(document).ready(function() {
    calcTotalPrice();

    $('.qty').keyup(function() {
        let qty = parseInt($(this).val());
        if (qty > 99)
            qty = 99;
        if (qty < 1)
            qty = 1;
        $(this).val(qty);

        let id = $(this).data('datac');
        let cart = getCookie('cart');
        for (let i = 0; i < cart.length; i++) {
            if (cart[i][0] == id) {
                cart[i][1] = qty;
                flag = true;
                break;
            }
        }

        if (!flag) return false;
        setCookie('cart', cart);
        calcTotalPrice();

    })

    $('.qty').click(function() {
        let qty = $(this).val();
        let id = $(this).data('datac');
        let cart = getCookie('cart');
        for (let i = 0; i < cart.length; i++) {
            if (cart[i][0] == id) {
                cart[i][1] = qty;
                flag = true;
                break;
            }
        }
        if (!flag) return false;
        setCookie('cart', cart);
        calcTotalPrice();

    })

    $('.btnRemove').click(function() {
        let id = $(this).data('datac');

        let cart = getCookie('cart');
        for (let i = 0; i < cart.length; i++) {
            if (cart[i][0] == id) {
                cart.splice(i, 1);
                flag = true;
                break;
            }
        }
        if (!flag) return false;
        setCookie('cart', cart);
        $("tr#" + id).remove();
        calcTotalPrice();

    })

})