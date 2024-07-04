const addMoreButton = document.getElementById('add-more');
const imageInputsContainer = document.getElementById('image-inputs');

addMoreButton.addEventListener('click', () => {
    const newInput = document.createElement('input');
    newInput.type = 'file';
    newInput.className = 'form-control mb-2';
    newInput.name = 'hotel_images[]';
    newInput.multiple = true;
    imageInputsContainer.appendChild(newInput);
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr('content')
    }
});

$(document).on('click', '#addhotel', function () {
    var hotel_name = $('#hotel_name').val();
    var hotel_descriptions = $('#hotel_descriptions').val();
    var hotel_nightly_price = $('#hotel_nightly_price').val();
    var hotel_weekly_price = $('#hotel_weekly_price').val();
    var hotel_monthly_price = $('#hotel_monthly_price').val();
    var hotel_weekends_price = $('#hotel_weekends_price').val();
    var hotel_additional_guest_price = $('#hotel_additional_guest_price').val();
    var hotel_security_deposit_price = $('#hotel_security_deposit_price').val();
    var hotel_location = $('#hotel_location').val();
    var hotel_contact_number = $('#hotel_contact_number').val();
    var hotel_email = $('#hotel_email').val();
    var hotel_bed_service = $('#hotel_bed_service').prop('checked') ? 1 : 0;
    var hotel_bath_service = $('#hotel_bath_service').prop('checked') ? 1 : 0;
    var hotel_wifi_service = $('#hotel_wifi_service').prop('checked') ? 1 : 0;
    var hotel_tv_service = $('#hotel_tv_service').prop('checked') ? 1 : 0;
    var hotel_ac_service = $('#hotel_ac_service').prop('checked') ? 1 : 0;
    var hotel_laundry_service = $('#hotel_laundry_service').prop('checked') ? 1 : 0;
    var hotel_food_service = $('#hotel_food_service').prop('checked') ? 1 : 0;
    var hotel_doctor_service = $('#hotel_doctor_service').prop('checked') ? 1 : 0;
    var hotel_room_service = $('#hotel_room_service').prop('checked') ? 1 : 0;
    var hotel_gym_service = $('#hotel_gym_service').prop('checked') ? 1 : 0;
    var hotel_swimmining_pool_service = $('#hotel_swimmining_pool_service').prop('checked') ? 1 : 0;
    var child_allow = $('#child_allow').val();
    var adult_allow = $('#adult_allow').val();
    var category_id = $('#category_id').val();
    // const imageInputs = document.querySelectorAll('#image-inputs input[type="file"]');

    var form_data = new FormData();

    form_data.append('hotel_name', hotel_name);
    form_data.append('hotel_descriptions', hotel_descriptions);
    form_data.append('hotel_nightly_price', hotel_nightly_price);
    form_data.append('hotel_weekly_price', hotel_weekly_price);
    form_data.append('hotel_monthly_price', hotel_monthly_price);
    form_data.append('hotel_weekends_price', hotel_weekends_price);
    form_data.append('hotel_additional_guest_price', hotel_additional_guest_price);
    form_data.append('hotel_security_deposit_price', hotel_security_deposit_price);
    form_data.append('hotel_location', hotel_location);
    form_data.append('hotel_contact_number', hotel_contact_number);
    form_data.append('hotel_email', hotel_email);
    form_data.append('hotel_bed_service', hotel_bed_service);
    form_data.append('hotel_bath_service', hotel_bath_service);
    form_data.append('hotel_wifi_service', hotel_wifi_service);
    form_data.append('hotel_tv_service', hotel_tv_service);
    form_data.append('hotel_ac_service', hotel_ac_service);
    form_data.append('hotel_laundry_service', hotel_laundry_service);
    form_data.append('hotel_food_service', hotel_food_service);
    form_data.append('hotel_doctor_service', hotel_doctor_service);
    form_data.append('hotel_room_service', hotel_room_service);
    form_data.append('hotel_gym_service', hotel_gym_service);
    form_data.append('hotel_swimmining_pool_service', hotel_swimmining_pool_service);
    form_data.append('child_allow', child_allow);
    form_data.append('adult_allow', adult_allow);
    form_data.append('category_id', category_id);
    // form_data.append('hotel_image', $('#hotel_image')[0].files[0]);

    // imageInputs.forEach((fileInput) => {
    //     if (fileInput.files.length > 0) {
    //       for (let i = 0; i < fileInput.files.length; i++) {
    //         form_data.append('hotel_images', fileInput.files[i]);
    //       }
    //     }
    // });

    var url = $(this).data('url');

    $.ajax({
        url: url,
        type: 'POST',
        data: form_data,
        processData:false,
        contentType:false,
        success: function (response) {
            // $('#editProdileModal').modal('hide');
            // $('#profile_div').load(location.href + ' #profile_div');
            console.log(response);
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

