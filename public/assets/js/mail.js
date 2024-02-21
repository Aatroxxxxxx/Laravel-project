document.getElementById('contact footer-contact').addEventListener('submit', function(event) {
    event.preventDefault();

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
    var csrfToken = document.querySelector('meta[name="csrf-token"]').content; // Get the CSRF token from the meta tag

    emailjs.init('jHM6ybyQwjtR6B1s_');
    emailjs.send("service_q2p745q", "template_vn0g379", {
        name: name,
        email: email,
        message: message,
        _token: csrfToken 
    })
    .then(function(response) {
        console.log('E-mail envoyé avec succès !', response);
        alert('E-mail envoyé avec succès !');
        document.getElementById('contact footer-contact').reset();
    }, function(error) {
        console.error('Erreur lors de l\'envoi de l\'e-mail :', error);
        alert('Une erreur s\'est produite lors de l\'envoi de l\'e-mail.');
    });
});