<?php

require_once __DIR__ . '/../model/Utilisateur.php';

class UtilisateurRepository {

    public function __construct() {
        // Ici vous pourriez initialiser une connexion à la base de données
    }

    // Exemple de méthode pour récupérer un utilisateur par email
    public function findByEmail($email) {
        // Ici, normalement, vous feriez une requête SQL
        // Pour l'instant, on retourne juste un objet fictif
        return new Utilisateur($email, 'motdepasse');
    }
}
