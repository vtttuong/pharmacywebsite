$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'post',
            url: 'http://localhost/weblayout/contact/sendmail',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                alert(res);
            },
            error: function(err) {
                alert(err);
            }
        })
        $('form')[0].reset();
        return false;
    })
})