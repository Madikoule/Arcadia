USE arcadia;

CREATE TABLE utilisateur (
    id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_user VARCHAR(100) NOT NULL,
    firstname_user VARCHAR(100) NOT NULL,
    password_user VARCHAR(60) NOT NULL,
    email_user VARCHAR(100) NOT NULL,
    id_roles INT NOT NULL
);

CREATE TABLE services (
    id_services INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_service VARCHAR(100) NOT NULL,
    s_description VARCHAR(255) NOT NULL
);

CREATE TABLE roles (
    id_roles INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_roles VARCHAR(100) NOT NULL
);

CREATE TABLE habitat ( 
    id_habitat INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_habitat VARCHAR(100) NOT NULL,
    image_habitat VARCHAR(255) NOT NULL,
    description_habitat TEXT NOT NULL
);

CREATE TABLE avis (
    id_avis INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    description_avis TEXT NOT NULL,
    note_avis INT NOT NULL,
    email_avis VARCHAR(100) NOT NULL,
    id_user INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES utilisateur(id_user)
);

CREATE TABLE animal (
    id_animal INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_animal VARCHAR(100) NOT NULL,
    race_animal VARCHAR(255) NOT NULL,
    habitat_animal VARCHAR(255) NOT NULL,
    age_animal INT NOT NULL,
    description_animal TEXT NOT NULL
);

CREATE TABLE nourriture ( 
    id_nourriture INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_nourriture VARCHAR(100) NOT NULL,
    description_nourriture VARCHAR(255) NOT NULL,
    grammage_nourriture VARCHAR(255) NOT NULL,
    date_passage DATETIME NOT NULL,
    etat_animal VARCHAR(255) NOT NULL
);

CREATE TABLE horaire ( 
    id_horaire INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ouverture_horaire TIME NOT NULL,
    fermeture_horaire TIME NOT NULL,
    id_user INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES utilisateur(id_user)
);

CREATE TABLE image ( 
    id_image INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_image VARCHAR(100) NOT NULL,
    chemin_image VARCHAR(100) NOT NULL
);

CREATE TABLE jours (  
    id_jours INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_jours VARCHAR(100) NOT NULL,
    statut_jours VARCHAR(100) NOT NULL,
    id_services INT NOT NULL,
    FOREIGN KEY (id_services) REFERENCES services(id_services)
);

CREATE TABLE rapport (  
    id_rapport INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_rapport VARCHAR(255) NOT NULL
);


	
	INSERT INTO roles (name_roles) VALUES
	('Administrateur'),
	('Utilisateur'),
	('Vétérinaire');
	

	INSERT INTO  animal (name_animal, race_animal, habita_animal, age_animal, description_animal)VALUES 
	('Kamel & Kamoss', ' Giraffa Camelopardalis', 'La Savane' ,'4' , 'Les Girafes inséparables depuis le continent d/Afrique .'),
	('Gibbon Oyopi','Hylobates lar','Forêts tropicales, Asie','14' ,'Présent dans le Zoo depuis l/age de deux ans .'),
	('Gasper le Crocodile','Crocodylus niloticus','Marais , rivières et lacs en Afrique subsaharienne','35', 'Découvré l/incontournable Niloticus du Zoo , c/est une exception de l/avoir parmis nous .');



	INSERT INTO utilisateur (name_user, firstname_user, password_user, email_user, id_roles) VALUES
	('Doucoure', 'Mady', 'arcadia123', 'madydouc@yahoo.com', 1),
	('admini', 'passy', 'password789', 'admini789@example.com', 1);
		

	INSERT INTO services (name_service, s_description) VALUES
	('Visite Petit Train', 'Voyagez en train à la découverte de nos animaux, à travers différents paysages adaptés et aménagés pour vous approcher au maximum. Gardez les meilleurs souvenirs avec le Zoo Arcadia.'),
	('Restaurant fastfood', 'Déjeuner, goûter, pause salée ou sucrée... Notre restaurant propose une offre variée, pour répondre à toutes vos envies !'),
	('Visite des habitats', 'Le Zoo a le privilège de vous accompagner en tête-à-tête avec les animaux pendant une demi-journée, dans la peau d’un soigneur animalier. Une chose est sûre, vous garderez des souvenirs mémorables de votre visite au Zoo Arcadia.');





	INSERT INTO jours (name_jours, statu_jours, id_services) VALUES
	('Lundi', 'Ouvert', 1),
	('Mardi', 'Ouvert', 2),
	('Mercredi', 'Ouvert', 3),
	('Jeudi', 'Ouvert', 1),
	('Vendredi', 'Ouvert', 2),
	('Samedi', 'Ouvert', 3),
	('Dimanche', 'Fermé', 1);







-- Ajout de contraintes de clé étrangère
ALTER TABLE utilisateur ADD CONSTRAINT fk_id_roles FOREIGN KEY (id_roles) REFERENCES roles(id_roles);
ALTER TABLE avis ADD CONSTRAINT fk_id_user_avis FOREIGN KEY (id_user) REFERENCES utilisateur(id_user);
ALTER TABLE horaire ADD CONSTRAINT fk_id_user_horaire FOREIGN KEY (id_user) REFERENCES utilisateur(id_user);
ALTER TABLE jours ADD CONSTRAINT fk_id_services FOREIGN KEY (id_services) REFERENCES services(id_services);





