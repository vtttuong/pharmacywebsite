$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);

        let password = $("#password").val();
        let new_password = $("#new_password").val();
        if (password == new_password) {
            alert("New Password have to differ from Old Password!")
            return false;
        }

        if (password == '' || new_password == '') {
            alert("Enter Password and New Password to submit!");
            return false;
        } else {
            $.ajax({
                type: 'post',
                url: 'http://localhost/weblayout/user/change',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    alert(res);
                    window.location.href = 'http://localhost/weblayout';
                },
                error: function(err) {
                    alert("Change Pass Failed");
                }
            })
        }
    })
})