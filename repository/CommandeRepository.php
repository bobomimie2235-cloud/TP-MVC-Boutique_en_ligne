<?php
// repository/CommandeRepository.php
require_once __DIR__ . '/../model/Commande.php';

class CommandeRepository {

    public function __construct() {
        // Ici, vous pourriez initialiser une connexion à la base de données
    }

    // Méthode pour récupérer toutes les commandes
    public function getAll() {
        // Exemple fictif : normalement vous feriez une requête SQL ici
        $commande1 = new Order(1, '2026-01-20', 100.0);
        $commande2 = new Order(2, '2026-01-19', 50.0);

        return [$commande1, $commande2];
    }
}
