CREATE DATABASE IF NOT EXISTS boutique;
USE boutique;

CREATE TABLE produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prix DECIMAL(10,2) NOT NULL
);

INSERT INTO produit (nom, prix) VALUES
('Produit 1', 10.50),
('Produit 2', 20.00),
('Produit 3', 15.75);
