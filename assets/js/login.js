$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);

        let user = $("#username").val();
        let password = $("#password").val();

        if (user == '' || password == '') {
            alert("Enter username and password to login!");
        } else {
            $.ajax({
                type: 'post',
                url: 'http://localhost/weblayout/user/login',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    console.log(res);
                    window.location.href = 'http://localhost/weblayout';
                },
                error: function(err) {
                    alert("Login Failed");
                }
            })
        }
    })
})