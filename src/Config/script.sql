CREATE DATABASE CareerLink;
USE CareerLink;

CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(150),
    prenom VARCHAR(150),
    email VARCHAR(150),
    pass varchar(150),
    rolee ENUM('Administrateur', 'Recruteur', 'Candidat')
);

CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(50)
);

CREATE TABLE Offre (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150),
    description TEXT,
    typecontrat ENUM ('CDI', 'CDD', 'Stage'),
    salaire INT,
    lieu VARCHAR(100),
    categorie_id INT,
    Users_id INT,
    FOREIGN KEY (Users_id) REFERENCES Users (id),
    FOREIGN KEY (categorie_id) REFERENCES Categorie(id)
    
);


CREATE TABLE Tag (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE OffreTag (
    Offre_id INT,
    tag_id INT,
    FOREIGN KEY (Offre_id) REFERENCES Offre(id),
    FOREIGN KEY (tag_id) REFERENCES Tag(id)
);

CREATE TABLE OffreCandidatStatus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Users_id INT,
    Offre_id INT,
    date_postulation DATETIME,
    FOREIGN KEY (Users_id) REFERENCES Users(id),
    FOREIGN KEY (Offre_id) REFERENCES Offre(id)
);