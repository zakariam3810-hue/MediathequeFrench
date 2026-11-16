CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    adresse VARCHAR(255),
    email VARCHAR(150),
    telephone VARCHAR(20)
);

CREATE TABLE livres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(200) NOT NULL,
    auteur VARCHAR(150) NOT NULL,
    genre VARCHAR(100),
    annee_publication INT,
    disponible BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE emprunts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    livre_id INT NOT NULL,
    date_emprunt DATE NOT NULL,
    date_retour_prevue DATE NOT NULL,
    date_retour_reelle DATE,
    FOREIGN KEY (client_id) REFERENCES clients(id),
    FOREIGN KEY (livre_id) REFERENCES livres(id)
);
