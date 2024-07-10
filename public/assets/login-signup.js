//Close alert in 5 second
const alertBox = document.querySelector('#alert');
setTimeout(() => {
    alertBox.classList.remove('alert-danger');
    alertBox.style.display = 'none';
}, 5000);

window.history.forward();
function noBack() {
    window.history.forward();
}

$(document).on('click', '#view_pass', function () {
    var passInput = $('#password');
    if (passInput.attr('type') === 'password') {
        passInput.attr('type', 'text');
        $('#pass_eyes').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
    } else {
        passInput.attr('type', 'password');
        $('#pass_eyes').removeClass('fas fa-eye').addClass('fas fa-eye-slash');
    }
});
