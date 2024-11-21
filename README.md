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

Créer une page contact accesible via /contact qui demande à l'utilisateur son nom, son email, un message .
Il permet aux utilisateurs d'envoyer des messages, qui sont ensuite affichés sur le tbaleau de bord de l'application.
Ce système de messagerie est concu pour être siplie et efficace, permettant une communication fluide entre les utilisateurs et l'administrateur du site .

- Remplissez tous les champs obligatoires() et cliquez sur le bouto, "Envoyer".
- Une fois le message envoyé apparait également sur le tableau de bord .

GESTION DES ERREURS
- es champs obligatoires sont validés avant l'envoi.
- En cas d'erreur lors de l'envoi, une alerte s'affiche pour informer l'utilisateur.



// AUTHENTIFICATION ET CONNEXION AU DASHBOARD

- l'accès au tableau de bord de l'application est protégé par un système d'authentification. Seuls les utilisateurs ayant des identifiants valides peuvent se connecter et accéder aux fonctionnalités du dashboard. Ce système d'authentification repose sur un mécanisme de mot de passe sécurisé et une validation des informations de connexion.

- Processus d'Authentification
Page de connexion :

- L'utilisateur doit se rendre sur la page de connexion via l'URL /connexion de l'application.
Il devra fournir son adresse e-mail et son mot de passe pour tenter de se connecter.
Vérification des Identifiants :

- Lors de la soumission du formulaire de connexion, les informations fournies par l'utilisateur (email et mot de passe) sont envoyées au serveur pour vérification.
L'email fourni est comparé aux utilisateurs enregistrés dans la base de données. Si un utilisateur correspondant à l'email existe, le système vérifie ensuite si le mot de passe est correct.
Validation du Mot de Passe :

- Le mot de passe est validé à l'aide d'un mécanisme de hachage sécurisé (par exemple, Argon2 ou bcrypt), pour garantir que le mot de passe stocké dans la base de données ne puisse pas être facilement compromis.
Si le mot de passe est incorrect, l'utilisateur reçoit un message d'erreur et doit réessayer.
Connexion réussie :

- Si l'authentification réussit (email et mot de passe valides), l'utilisateur est connecté et redirigé vers le tableau de bord (/dashboard).
Une session d'utilisateur est ouverte, permettant à l'utilisateur de naviguer et d'interagir avec le tableau de bord.
Accès sécurisé au Dashboard :

- Si un utilisateur non authentifié tente d'accéder à l'URL du tableau de bord (/dashboard) directement, il sera redirigé vers la page de connexion.
Seuls les utilisateurs disposant du rôle ROLE_USER ou un rôle supérieur peuvent accéder à cette page.
Sécurisation des Données
Mot de Passe : Le mot de passe des utilisateurs est haché avant d'être stocké dans la base de données, ce qui empêche toute fuite de données sensibles en cas de violation de sécurité.
Sessions Sécurisées : Les utilisateurs qui réussissent à se connecter bénéficient d'une session sécurisée pendant leur navigation sur le dashboard.
Erreurs d'Authentification
Si l'email ou le mot de passe fournis sont incorrects, l'utilisateur recevra un message d'erreur indiquant Bad credentials ou Invalid password.
En cas d'absence d'un utilisateur avec l'email fourni, le message d'erreur sera : No user found for email .
Ces messages sont renvoyés dans une réponse HTTP avec le code d'état 401 Unauthorized.


