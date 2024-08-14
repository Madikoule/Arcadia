	CREATE DATABASE Arcadia ;

    CREATE table utilisateur (
        id_user INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        password_user VARCHAR(60) NOTNULL ,
        email_user VARCHAR(100) NOT NULL ,
        id_roles INT NOT NULL ,
        
        
    );


    CREATE TABLE services (
        id_services INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name_service VARCHAR(100) NOT NULL ,
        description VARCHAR(255) NOT NULL ,

	);


	CREATE TABLE roles (
		id_roles INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
		name_roles VARCHAR(100) NOT NULL ,

	);


	CREATE  TABLE habitat ( 
		id_habitat INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
		name_habitat VARCHAR(100) NOT  NULL ,
		image_habitat Varchar(255) NOT NULL ,
		list_animaux INT NOT NULL ,
		description_habitat TEXT NOT NULL ,
		

	);


	CREATE TABLE avis (
		id_avis INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
		description_avis TEXT NOT NULL ,
		note_avis INT NOT NULL ,
		email_avis VARCHAR(100) NOT NULL ,
		id_user INT NOT NULL ,

	);


	CREATE TABLE animal (
		id_animal INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
		name_animal VARCHAR(100) NOT NULL ,
		race_animal VARCHAR(100) NOT NULL ,
		habitat_animal VARCHAR(100) NOT NULL ,
		age_animal INT NOT NULL ,
		description_animal TEXT NOT NULL ,

	);



	CREATE TABLE Nourriture ( 
		id_nourriture INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
		name_nourriture VARCHAR(100) NOT NULL ,
		description_nourriture VARCHAR(255) NOT NULL ,
		grammage_nourriture VARCHAR(255) NOT NULL ,
		date_passage DATETIME NOT NULL ,
		etat_animal VARCHAR(255) NOT NULL ,

	);



	CREATE TABLE horaire ( 
		id_horaire INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
		ouverture_horaire TIME NOT NULL ,
		fermeture_horaire TIME NOT NULL ,
		id_user INT NOT NULL ,
		
	);



	CREATE TABLE image ( 
		id_image INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		name_image VARCHAR(100) NOT NULL ,
		chemin_image VARCHAR(100) NOT NULL ,
		
	);


	CREATE TABLE jours (  
		id_jours INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		name_jours VARCHAR(100) NOT NULL ,
		statu_jours VARCHAR(100) NOT NULL ,
		id_services INT NOT NULL ,


	);


	CREATE TABLE rapport (  
		id_rapport INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		name_rapport VARCHAR(255) NOT NULL ,


	);


	
	INSERT INTO roles (name_roles) VALUES
	('Administrateur'),
	('Utilisateur');



	INSERT INTO utilisateur (name_user, firstname_user, password_user, email_user, id_roles) VALUES
	('Doucoure', 'Mady', 'arcadia123', 'madydouc@yahoo.com, 1),
	('admini', 'admini', 'password789', 'admini789@example.com', 1);





	INSERT INTO services (name_service, description) VALUES
	('Visite petit Train', 'Voyagé en train à la découverte de nos animaux..'),
	('Restaurant fastfood', 'Notre restaurant propoent une offres variée, pour répondre à toutes vos envies !'),
	('Visite des habitat', ' Le Zoo à le privilège de vous accompagnée en tète à tète avec les animaux une demi-journée mémorable'');



	INSERT INTO jours (name_jours, statu_jours, id_services) VALUES
	('Lundi', 'Ouvert', 1),
	('Mardi', 'Ouvert', 2),
	('Mercredi', 'Ouvert', 3),
	('Jeudi', 'Ouvert', 1),
	('Vendredi', 'Ouvert', 2),
	('Samedi', 'Ouvert', 3),
	('Dimanche', 'Fermé', 1);





	-- Cette contrainte lie la colonne 'id_roles' de la table 'utilisateur' à la colonne 'id_roles' de la table 'roles'.
	ALTER TABLE `utilisateur` ADD CONSTRAINT fk_id_roles FOREIGN KEY (id_roles) REFERENCES `roles`(id_roles);


	-- On modifie la table 'avis' pour ajouter une contrainte de clé étrangère.
	-- Cette contrainte lie la colonne 'id_user' de la table 'avis' à la colonne 'id_user' de la table 'utilisateur'.
	ALTER TABLE `avis` ADD CONSTRAINT fk_id_user_avis FOREIGN KEY (id_user) REFERENCES `utilisateur`(id_user);

	-- On modifie la table 'horaire' pour ajouter une contrainte de clé étrangère.
	-- Cette contrainte lie la colonne 'id_user' de la table 'horaire' à la colonne 'id_user' de la table 'utilisateur'.
	ALTER TABLE `horaire` ADD CONSTRAINT fk_id_user_horaire FOREIGN KEY (id_user) REFERENCES `utilisateur`(id_user);

	-- On modifie la table 'jours' pour ajouter une contrainte de clé étrangère.
	-- Cette contrainte lie la colonne 'id_services' de la table 'jours' à la colonne 'id_services' de la table 'services'.
	ALTER TABLE `jours`ADD CONSTRAINT fk_id_services FOREIGN KEY (id_services) REFERENCES `services`(id_services);










