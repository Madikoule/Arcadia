
/***** popup animaux *****/

// ouverture de la fenetre
    function openPopup(popupId) {
        document.getElementById(popupId).style.display = 'block';
    }
    
// fermeture de la fenetre
    function closePopup(popupId) {
        document.getElementById(popupId).style.display = 'none';

    }




/****** form AVIS******/

document.addEventListener('DOMContentLoaded', (event) => {
    // Sélectionne tous les boutons radio des étoiles
    const stars = document.querySelectorAll('.star-rating input[type="radio"]');
    // Sélectionne l'élément pour afficher la valeur de la note
    const ratingValue = document.getElementById('ratingValue');

    // Ajoute un écouteur d'événement à chaque bouton radio
    stars.forEach(star => {
        star.addEventListener('change', function() {
            // Met à jour le texte affiché avec la valeur de l'étoile sélectionnée
            ratingValue.innerText = `Vous avez donné une note de : ${this.value} étoile(s)`;
        });
    })
});


    window.onload = function() {
        const messages = document.querySelectorAll('.popup-message');
        messages.forEach(message => {
            alert(message.innerHTML); 
        });
    };


    // formulaire de contact message de confirmation est des erreurs !
    
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("contact-form");
        const confirmationMessage = document.getElementById("confirmation-message");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Empêche le rechargement de la page
            
            // Réinitialise les messages d'erreur
            document.querySelectorAll(".comments").forEach(el => el.textContent = "");

            // Préparation des données du formulaire pour l'envoi
            const formData = new FormData(form);

            fetch("send_message.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Affiche le message de confirmation si l'envoi est réussi
                    confirmationMessage.style.display = "block";
                    form.reset(); // Réinitialise le formulaire
                } else if (data.errors) {
                    // Affiche les erreurs sous chaque champ
                    if (data.errors.nameError) document.getElementById("name").nextElementSibling.textContent = data.errors.nameError;
                    if (data.errors.firstnameError) document.getElementById("firstname").nextElementSibling.textContent = data.errors.firstnameError;
                    if (data.errors.emailError) document.getElementById("email").nextElementSibling.textContent = data.errors.emailError;
                    if (data.errors.messageError) document.getElementById("message").nextElementSibling.textContent = data.errors.messageError;
                } else {
                    alert(data.error || "Une erreur s'est produite lors de l'envoi du message.");
                }
            })
            .catch(() => {
                alert("Une erreur s'est produite lors de l'envoi du message.");
            });
        });
    });

