

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

