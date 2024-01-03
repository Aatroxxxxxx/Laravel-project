
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});



document.addEventListener('DOMContentLoaded', function () {
    var errorMessages = document.querySelectorAll('.error-message');

    errorMessages.forEach(function (errorMessage) {
        setTimeout(function () {
            errorMessage.style.opacity = '0';
            setTimeout(function () {
                errorMessage.style.display = 'none';
            }, 1000); // 1 second for the fade-out effect
        }, 5000); // 5 seconds delay before starting the fade-out
    });
});