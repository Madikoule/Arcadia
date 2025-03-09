CREATE DATABASE arcadia;
USE arcadia;

-- Table des rôles
CREATE TABLE roles (
    id_roles INT PRIMARY KEY AUTO_INCREMENT,
    name_roles VARCHAR(100) NOT NULL UNIQUE
);

-- Table des utilisateurs
CREATE TABLE utilisateur (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    password_user VARCHAR(255) NOT NULL, -- Le mot de passe sera haché
    email_user VARCHAR(100) NOT NULL UNIQUE,
    id_roles INT NOT NULL,
    FOREIGN KEY (id_roles) REFERENCES roles(id_roles)
);

-- Table des services
CREATE TABLE services (
    id_services INT PRIMARY KEY AUTO_INCREMENT,
    name_service VARCHAR(100) NOT NULL,
    s_description VARCHAR(255) NOT NULL
);

-- Table des habitats
CREATE TABLE habitat ( 
    id_habitat INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_habitat VARCHAR(100) NOT NULL,
    image_habitat VARCHAR(255) NOT NULL,
    description_habitat TEXT NOT NULL
);

-- Table des avis
CREATE TABLE avis (
    id_avis INT PRIMARY KEY AUTO_INCREMENT,
    description_avis TEXT NOT NULL,
    note_avis INT NOT NULL,
    email_avis VARCHAR(100) NOT NULL,
    id_user INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES utilisateur(id_user)
);

-- Table des animaux
CREATE TABLE animal (
    id_animal INT AUTO_INCREMENT PRIMARY KEY,
    name_animal VARCHAR(100) NOT NULL,
    race_animal VARCHAR(255) NOT NULL,
    habitat_animal VARCHAR(255) NOT NULL, -- Cette colonne peut être supprimée si l'id_habitat est suffisant
    age INT NOT NULL,
    description_animal TEXT NOT NULL,
    image_animal VARCHAR(255) DEFAULT NULL,
    title_animal VARCHAR(255) NOT NULL,
    id_habitat INT NOT NULL,
    FOREIGN KEY (id_habitat) REFERENCES habitat(id_habitat)
);

-- Table des nourritures
CREATE TABLE nourriture ( 
    id_nourriture INT PRIMARY KEY AUTO_INCREMENT,
    name_nourriture VARCHAR(100) NOT NULL,
    id_animal INT NOT NULL,  -- Lien vers l'animal
    description_nourriture VARCHAR(255) NOT NULL,
    grammage_nourriture VARCHAR(255) NOT NULL,
    date_passage DATETIME NOT NULL,
    etat_animal VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_animal) REFERENCES animal(id_animal)
);

-- Table des horaires
CREATE TABLE horaire ( 
    id_horaire INT PRIMARY KEY AUTO_INCREMENT,
    ouverture_horaire TIME NOT NULL,
    fermeture_horaire TIME NOT NULL,
    id_user INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES utilisateur(id_user)
);

-- Table des images
CREATE TABLE image ( 
    id_image INT PRIMARY KEY AUTO_INCREMENT,
    name_image VARCHAR(100) NOT NULL,
    chemin_image VARCHAR(100) NOT NULL
);

-- Table des jours
CREATE TABLE jours (  
    id_jours INT PRIMARY KEY AUTO_INCREMENT,
    name_jours VARCHAR(100) NOT NULL,
    statut_jours VARCHAR(100) NOT NULL,
    id_services INT NOT NULL,
    FOREIGN KEY (id_services) REFERENCES services(id_services)
);

-- Table des rapports
CREATE TABLE rapport (  
    id_rapport INT PRIMARY KEY AUTO_INCREMENT,
    name_rapport VARCHAR(255) NOT NULL
);

-- Table des commentaires sur les habitats
CREATE TABLE commentaire_habitat (
    id_commentaire_habitat INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    date_commentaire DATE NOT NULL,
    text_commentaire TEXT NOT NULL,
    etat_habitat VARCHAR(255) NOT NULL,
    id_habitat INT NOT NULL,  -- Ajout du lien vers habitat
    FOREIGN KEY (id_habitat) REFERENCES habitat(id_habitat)
);

-- Table des statistiques
CREATE TABLE statistique (
    id_consultation INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_consultation INT NOT NULL
);

-- Insertion des rôles
INSERT INTO roles (name_roles) VALUES
('ROLE_ADMIN'),
('ROLE_USER');

-- Insertion des animaux
INSERT INTO animal (name_animal, race_animal, habitat_animal, age, description_animal, id_habitat) VALUES 
('Kamel & Kamoss', 'Giraffa Camelopardalis', 'La Savane', 4, 'Les Girafes inséparables depuis le continent d\'Afrique.', 1),
('Gibbon Oyopi', 'Hylobates lar', 'Forêts tropicales, Asie', 14, 'Présent dans le Zoo depuis l\'âge de deux ans.', 2),
('Gasper le Crocodile', 'Crocodylus niloticus', 'Marais, rivières et lacs en Afrique subsaharienne', 35, 'Découvrez l\'incontournable Niloticus du Zoo, une exception parmi nous.', 3);

-- Insertion des nourritures
INSERT INTO nourriture (name_nourriture, id_animal, description_nourriture, grammage_nourriture, etat_animal, date_passage) VALUES
('Fruits', 1, 'Un mélange de bananes, pommes et poires bien mûres', 300, 'Actif', '2024-12-01'),
('Insectes', 1, 'Petits insectes séchés, riches en protéines', 100, 'Joue avec ses congénères', '2024-12-03'),
('Feuilles d\'acacia', 2, 'Feuilles fraîches riches en nutriments, cueillies du matin', 1200, 'En bonne santé', '2024-12-02'),
('Granulés spéciaux', 2, 'Granulés enrichis en vitamines et minéraux', 800, 'Fatiguée', '2024-12-04'),
('Viande crue', 3, 'Morceaux de poulet frais, non assaisonnés', 1500, 'Agressif', '2024-12-03'),
('Poissons', 3, 'Carpes fraîches entières, avec écailles', 2000, 'Calme après repas', '2024-12-01');

-- Insertion des utilisateurs
INSERT INTO utilisateur (password_user, email_user, id_roles) VALUES
('Arcadia123', 'arcadia123@yahoo.com', 1),
('Password789', 'admin789@example.com', 2);

-- Insertion des services
INSERT INTO services (name_service, s_description) VALUES
('Visite Petit Train', 'Voyagez en train à la découverte de nos animaux, à travers différents paysages adaptés et aménagés pour vous approcher au maximum. Gardez les meilleurs souvenirs avec le Zoo Arcadia.'),
('Restaurant fastfood', 'Déjeuner, goûter, pause salée ou sucrée... Notre restaurant propose une offre variée, pour répondre à toutes vos envies !'),
('Visite des habitats', 'Le Zoo a le privilège de vous accompagner en tête-à-tête avec les animaux pendant une demi-journée, dans la peau d’un soigneur animalier. Une chose est sûre, vous garderez des souvenirs mémorables de votre visite au Zoo Arcadia.');

-- Insertion des jours
INSERT INTO jours (name_jours, statut_jours, id_services) VALUES
('Lundi', 'Ouvert', 1),
('Mardi', 'Ouvert', 2),
('Mercredi', 'Ouvert', 3),
('Jeudi', 'Ouvert', 1),
('Vendredi', 'Ouvert', 2),
('Samedi', 'Ouvert', 3),
('Dimanche', 'Fermé', 1);

-- Contraintes et clés étrangères
ALTER TABLE utilisateur ADD CONSTRAINT fk_id_roles FOREIGN KEY (id_roles) REFERENCES roles(id_roles);
ALTER TABLE avis ADD CONSTRAINT fk_id_user_avis FOREIGN KEY (id_user) REFERENCES utilisateur(id_user);
ALTER TABLE horaire ADD CONSTRAINT fk_id_user_horaire FOREIGN KEY (id_user) REFERENCES utilisateur(id_user);
ALTER TABLE jours ADD CONSTRAINT fk_id_services FOREIGN KEY (id_services) REFERENCES services(id_services);
ALTER TABLE animal ADD CONSTRAINT fk_id_habitat FOREIGN KEY (id_habitat) REFERENCES habitat(id_habitat);
ALTER TABLE commentaire_habitat ADD CONSTRAINT fk_id_habitat_commentaire FOREIGN KEY (id_habitat) REFERENCES habitat(id_habitat);
