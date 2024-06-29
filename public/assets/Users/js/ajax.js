$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr('content')
    }
});

$(document).on('click', '#update_profile', function () {
    var form = $('#user_profile_update_form')[0];
    var formData = new FormData(form);
    var url = $(this).data('url');

    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        processData:false,
        contentType:false,
        success: function (response) {
            $('#editProdileModal').modal('hide');
            $('#profile_div').load(location.href + ' #profile_div');
        },
        error: function(xhr, status, error) {
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                var errors = xhr.responseJSON.errors;
                $.each(errors, function(key, value) {
                    $('#error-' + key).removeClass('d-none');
                    $('#error-' + key).addClass('d-block');
                    $('#error-' + key).text(value);
                });
            } else {
                // Handle the case where xhr.responseJSON is undefined or doesn't contain errors
                console.error('Error:', xhr.statusText);
            }
        }
    });
});
