# Projet-zoo

// PRÉPARATION ET PLANIFICATION :

- Révision des exigences et de la conception.
- Ajustement nécessaires au tables et MCD.
- Finalisation de la conception et préparation de l'environnement de développement .

// CONFIGURATION DU PROJET SYMFONY :

- Initialisation du projet Symfony et configuration de base .
- Création des entités et configuration de Doctrine. 
- Mise en place des paramètres de base de données et tests de connexion .

// DÉVELOPPEMENT DES FONCTIONNALITÉS BACKEND :

- Création des contrôleurs pour la gestion des utilisateurs et des compte rendus.


// Compteur de Vues
Ce projet est un compteur de vues en PHP permettant de suivre et d'afficher le nombre total de visites sur une page. Chaque visite est comptabilisée et le total est stocké dans un fichier texte (compteur.txt) pour une persistance des données.

#Fonctionnalités:
- Incrémentation automatique à chaque visite.
- Stockage des vues dans un fichier texte pour conserver les données après chaque visite.
- Affichage dynamique du nombre total de vues.



// SYSTÈME DE CONNEXION :

#Fonctionnement:

Saisie des identifiants :
L'utilisateur entre son adresse e-mail et son mot de passe sur la page de connexion.

Vérification :

Le système vérifie si l'e-mail est enregistré.
Si l'e-mail est correct, le mot de passe est vérifié.
Accès au tableau de bord :

Si les identifiants sont corrects : L'utilisateur accède à son tableau de bord.
Si les identifiants sont incorrects : Un message d'erreur s'affiche, et l'accès est refusé.




// CRÉER UN FORMULAIRE DE CONTACT 

Créer une page contact accesible via /contact qui demande à l'utilisateur son nom, son email, un message 

on utilisera un objet "ContactFormDTO" pour représenter les données de ce formulaire (pas une entité car on ne sauvegarde pas en base de données).

on utilisera mailpit ou maildev pour tester la réception d'email 