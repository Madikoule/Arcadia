
/***** popup animaux *****/

// ouverture de la fenetre
function openPopup(popupId) {
    document.getElementById(popupId).style.display = 'block';
}

// fermeture de la fenetre
function closePopup(popupId) {
    document.getElementById(popupId).style.display = 'none';

}



    // formulaire de contact

        document.getElementById('contact-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Empêche le rechargement de la page

            const formData = new FormData(this);
            const url = this.action;

            // Réinitialiser les messages d'erreur et de succès
            document.querySelectorAll('.text-danger').forEach(el => el.textContent = '');
            document.getElementById('successMessage').classList.add('d-none');
            document.getElementById('errorMessage').classList.add('d-none');

            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Afficher le message de succès
                    document.getElementById('successMessage').textContent = 'Votre message a été envoyé avec succès.';
                    document.getElementById('successMessage').classList.remove('d-none');
                    // Réinitialiser le formulaire
                    document.getElementById('contact-form').reset();
                } else if (data.errors) {
                    // Afficher les erreurs 
                    if (data.errors.nameError) {
                        document.getElementById('nameError').textContent = data.errors.nameError;
                    }
                    if (data.errors.firstnameError) {
                        document.getElementById('firstnameError').textContent = data.errors.firstnameError;
                    }
                    if (data.errors.emailError) {
                        document.getElementById('emailError').textContent = data.errors.emailError;
                    }
                    if (data.errors.messageError) {
                        document.getElementById('messageError').textContent = data.errors.messageError;
                    }
                } else {
                    // Afficher un message d'erreur général
                    document.getElementById('errorMessage').textContent = 'Une erreur est survenue. Veuillez réessayer.';
                    document.getElementById('errorMessage').classList.remove('d-none');

                }
            })
            .catch(error => {
                // Afficher une erreur générale si la requête échoue
                document.getElementById('errorMessage').textContent = 'Une erreur inattendue est survenue.';
                document.getElementById('errorMessage').classList.remove('d-none');
                console.error('Erreur:', error);
            });
        });
