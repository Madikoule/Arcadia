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

Une page contact accesible via /contact qui demande à l'utilisateur son nom, son email, un message .
Il permet aux utilisateurs d'envoyer des messages, qui sont ensuite affichés sur le tableau de bord de l'application.
Ce système de messagerie est concu pour être simplifié et efficace, permettant une communication fluide entre les utilisateurs et l'administrateur du site .

- Remplissez tous les champs obligatoires() et cliquez sur le bouton, "Envoyer".
- Une fois le message envoyé apparait également sur le tableau de bord .

GESTION DES ERREURS
- les champs obligatoires sont validés avant l'envoi.
- En cas d'erreur lors de l'envoi, une alerte s'affiche pour informer l'utilisateur.



// AUTHENTIFICATION ET CONNEXION AU DASHBOARD

- l'accès au tableau de bord de l'application est protégé par un système d'authentification. Seuls les utilisateurs ayant des identifiants valides peuvent se connecter et accéder aux fonctionnalités du dashboard. Ce système d'authentification repose sur un mécanisme de mot de passe sécurisé et une validation des informations de connexion.

- Processus d'Authentification
Page de connexion :

- L'utilisateur doit se rendre sur la page de connexion via l'URL /connexion de l'application.
Il devra fournir son adresse e-mail et son mot de passe pour tenter de se connecter.

Vérification Sécurité :

- Le mot de passe est validé à l'aide d'un mécanisme de hachage sécurisé (par bcrypt), pour garantir que le mot de passe stocké dans la base de données ne puisse pas être facilement compromis.
Si le mot de passe est incorrect, l'utilisateur reçoit un message d'erreur et doit réessayer.

- Si l'authentification réussit (email et mot de passe valides), l'utilisateur est connecté et redirigé vers le tableau de bord (/dashboard).

- Si un utilisateur non authentifié tente d'accéder à l'URL du tableau de bord (/dashboard) directement, il sera redirigé vers la page de connexion.
Seuls les utilisateurs disposant du rôle ROLE_USER ou un rôle supérieur peuvent accéder à cette page.
Sécurisation des Données
Mot de Passe : Le mot de passe des utilisateurs est haché avant d'être stocké dans la base de données, ce qui empêche toute fuite de données sensibles en cas de violation de sécurité..



## Lien de déploiement
L'application est déployée et accessible en ligne : 

## Diagrammes et Documentation Technique
Voici les documents expliquant l'architecture et la base de données de votre application :
- [Diagramme de cas d'utilisation](https://drive.google.com/file/d/1GhyMRgsY0UG-6Sj4wpHMBaNiVESJ6h9B/view?usp=drive_link)
- [Diagramme MCD](https://drive.google.com/file/d/13lI8ukXCZSR6ercOvI4V9P5xMpYlO42D/view?usp=drive_link)
- [Diagramme de Séquence] (https://drive.google.com/file/d/1GhyMRgsY0UG-6Sj4wpHMBaNiVESJ6h9B/view?usp=sharing)

## Installation et utilisation locale
Si quelqu'un souhaite exécuter ce projet en local, voici les étapes à suivre :
1. Clonez le repository : `git clone https://github.com/Madikoule/Arcadia.git
2. Installez les dépendances : `composer install`
3. Configurez la base de données : `php bin/console doctrine:migrations:migrate`
4. Lancez l'application : `symfony serve`
5. Accédez à l'application via [http://localhost:8000](http://localhost:8000)

## Technologies utilisées
-HTML ,CSS
- PHP 8.3
- Symfony 6.4.14
- MySQL 
- Javascript
- Bootstrap
- No SQL = en cour.



////////////////////////////////////////DESCRIPTION DU PROJET///////////////////////////////////


Le projet consiste à développer une application web pour le zoo Arcadia, en Bretagne, reflétant ses valeurs écologiques. L'objectif est de moderniser la présentation du zoo, améliorer l'expérience utilisateur, et offrir un outil de gestion centralisé pour les administrateurs, employés et vétérinaires.

- Cahier des charges :

Une interface intuitive pour les visiteurs (vue des animaux, habitats, services, avis, et contact).
Des espaces dédiés pour chaque rôle (administrateurs, employés, vétérinaires).
Un système sécurisé de gestion des données, des accès, et des statistiques sur la popularité des animaux.

Un design écologique et une navigation responsive, alignés avec les valeurs du zoo.

Expression du besoin :
José, le directeur, souhaite une application simple et efficace pour promouvoir le zoo et faciliter la gestion des opérations internes. Le système doit permettre :

Une gestion complète des animaux, habitats, services et comptes.
Une saisie des informations vétérinaires et alimentaires.
Une consultation publique , comme les avis et horaires.

Spécifications fonctionnelles :
Développée avec Symfony 6.4, la solution s’appuie sur HTML, CSS, JavaScript, et le template Twig. La base de données MySQL est administrée via phpMyAdmin. Les outils Trello, Figma, et Draw.io ont été utilisés pour organiser les tâches, concevoir le design, et modéliser les processus respectivement.

- TECHNOLOGIE UTILISÉE ET POURQUOI :
 HTML, CSS, JavaScript =>
Base du développement web pour structurer, styliser et rendre l’application interactive.

 Bootstrap =>
Framework CSS pour un design responsive rapide et cohérent.

 PHP et Symfony 6.4 (avec Twig) =>
PHP pour le backend, Symfony pour une architecture robuste et sécurisée (MVC). Twig facilite le rendu des vues.

 MySQL et phpMyAdmin =>
MySQL stocke les données structurées, phpMyAdmin simplifie leur gestion.

Trello, Figma, Draw.io =>
Trello organise les tâches, Figma conçoit les maquettes, Draw.io modélise les diagrammes.


- MISE EN PLACE DE L'ENVIRONNEMENT DE TRAVAIL :

Serveur local (XAMPP) : Configuration de PHP, MySQL, et Symfony via Composer.
Outils :
VS Code pour coder (extensions Symfony, PHP).
GitHUB pour le versionnement.
Workflow collaboratif :
Organisation des tâches avec Trello, validation des maquettes avec Figma, et tests en local avant déploiement.


- VEILLE ET TECHNOLOGIQUE SUR LA SÉCURTIÉ DE SYMFONY ET PHP :
J'ai effectué une veille sur les vulnérabilités de Symfony et PHP, en utilisant des ressources comme la documentation officielle, Grafikart, et VeilleTechno,la doc symfony

Symfony – Stateless Authenticator (JWT) :

J'ai étudié l'implémentation du Stateless Authenticator avec JWT pour sécuriser l'authentification via des tokens, éliminant ainsi la gestion des sessions. Cela renforce la sécurité des API RESTful.
Sécurisation des données :

Utilisation de Doctrine ORM pour prévenir les injections SQL et de Symfony Security pour la gestion des accès via firewalls et Voters.
Mise en place de protections contre les attaques CSRF et validation des entrées utilisateurs.

PHP :
Hachage sécurisé des mots de passe avec password_hash() et validation des données via le composant Validator pour éviter les failles de sécurité courantes comme XSS.
Cette veille m'a permis de sécuriser efficacement l'application en intégrant des pratiques modernes et adaptées aux besoins du projet.


- SITUATION DE TRAVAIL NÉCESSITANT UNE RECHERCHE DURANT LE PROJET :
Lors du développement du projet, une situation a nécessité une recherche sur l'authentification Stateless avec JWT dans Symfony. Je voulais comprendre comment configurer correctement l'authentification via des tokens JWT sans utiliser de sessions, tout en intégrant cette méthode dans Symfony.

Après une recherche sur un site anglophone, Symfonycasts, j'ai trouvé un guide qui expliquait la mise en œuvre de JWT et l’utilisation d’un Stateless Authenticator dans Symfony. L'extrait suivant m’a été utile :

Extrait original en anglais :
"To implement Stateless authentication with JWT, you must create an authenticator that validates the JWT on each request. The authenticator must extract the token from the headers and verify it using a secret key. This allows Symfony to authenticate requests without sessions." (Source: Symfonycasts, "Stateless Authentication with JWT")

Traduction en français :
"Pour implémenter l'authentification sans état avec JWT, vous devez créer un authentificateur qui valide le JWT à chaque requête. L'authentificateur doit extraire le token des en-têtes et le vérifier à l’aide d’une clé secrète. Cela permet à Symfony d’authentifier les requêtes sans utiliser de sessions."

Cette recherche m'a permis de mieux comprendre comment configurer l'authentification stateless avec des tokens JWT dans Symfony, sans avoir besoin d'utiliser de bundle tiers, et de l'intégrer correctement dans mon application.



//////////////////////// CONCLUSION //////////////////////

Ce projet de développement d'application web pour le zoo Arcadia a permis d’intégrer des pratiques modernes de gestion des données, de sécurité et d’interface utilisateur. À travers l’utilisation de Symfony 6.4, PHP, MySQL, et des bonnes pratiques en matière de sécurité comme l’authentification Stateless avec JWT, j’ai pu créer une solution robuste, sécurisée et adaptée aux besoins du zoo.

Le projet a également permis d'améliorer mes compétences en gestion des bases de données, en développement backend et en intégration de fonctionnalités comme les services, l’authentification, la gestion des utilisateurs, et la protection contre les attaques courantes telles que les injections SQL ou les attaques CSRF.

