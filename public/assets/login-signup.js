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
