$(document).ready(function() {
    $('form').submit(function(event) {
        var json;
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(result) {
                json = JSON.parse(result);
                if (json.url) {
                    window.location.href = json.url;
                } else {
                    swal(json.title, json.status,json.message );
                }
            },
        });
    });
});