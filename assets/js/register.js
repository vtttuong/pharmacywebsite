checkForm = () => {
    if ($('#fullname').val() == '' || $('#username').val() == '' || $('#password').val() == '' || $('#c_password').val() == '' || $('#gender').val() == '' ||
        $('#email').val() == '' || $('#phone').val() == '' || $('#birthday').val() == '' || $('#address').val() == '') {
        alert('Vui lòng nhập đầy đủ thông tin');
        return false;
    }
    let user = $("#alert_username").text();
    let email = $("#alert_email").text();
    let pass = $("#alert_password").text();


    if (user.trim() != 'OK' || email.trim() != 'OK' || pass.trim() != 'OK') {
        console.log(user);
        console.log(email);
        console.log(pass);
        return false;

    }
    return true;
}

ValidateEmail = (mail) => {
    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (mail.match(mailformat)) {
        return true;
    }
    $("#alert_email").html("Invalid email address!");
    return false;
}

$(document).ready(function() {

    $('form').submit(function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        if (!checkForm()) {
            alert('Vui lòng kiểm tra lại thông tin đăng kí');
            return false;
        } else {
            $.ajax({
                type: 'post',
                url: 'http://localhost/weblayout/user/add',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    alert(res);
                    window.location.href = 'http://localhost/weblayout/user';
                },
                error: function(err) {
                    alert(err);
                }
            })
        }

    });

    $("#username").keyup(function() {
        let username = $(this).val();

        $.ajax({
            type: 'get',
            url: 'http://localhost/weblayout/user/checkuser/' + username,
            success: function(res) {
                $("#alert_username").html(res);
            },
            error: function(res) {
                console.log(res);
            }
        })
    })
    $("#email").keyup(function() {
        let email = $(this).val();
        if (ValidateEmail(email)) {
            $.ajax({
                type: 'get',
                url: 'http://localhost/weblayout/user/checkemail/' + email,
                success: function(res) {
                    $("#alert_email").html(res);

                },
                error: function(res) {
                    console.log(res);
                }
            })
        } else
            flag_email = false;
    })
    $("#password").keyup(function() {
        let pass = $(this).val();
        let c_pass = $("#c_password").val();

        if (c_pass == '')
            return true;
        if (pass != c_pass) {
            $("#alert_password").html("Password don't match");
        } else {
            $("#alert_password").html("OK");
        }
    })
    $("#c_password").keyup(function() {
        let pass = $("#password").val();
        let c_pass = $(this).val();

        if (pass != c_pass) {
            $("#alert_password").html("Password don't match");

        } else {
            $("#alert_password").html("OK");

        }
    })
});