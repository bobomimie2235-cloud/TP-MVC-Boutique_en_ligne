<?php
require_once __DIR__ . '/../model/Commande.php';

class CommandeRepository {
    private PDO $db;

    public function __construct(PDO $db = null) {
        $this->db = $db; // injecter la connexion PDO si disponible
    }

    // Récupérer toutes les commandes (exemple fictif)
    public function getAll() {
        $commande1 = new Order(1, 1, 100.0, new DateTime('2026-01-20'));
        $commande2 = new Order(2, 2, 50.0, new DateTime('2026-01-19'));
        return [$commande1, $commande2];
    }

    // Récupérer toutes les commandes d'un utilisateur
    public function getByUserId(int $userId) {
        // Si tu as une base de données PDO, tu ferais une requête SQL :
        // $stmt = $this->db->prepare("SELECT * FROM commandes WHERE user_id = :userId");
        // $stmt->execute(['userId' => $userId]);
        // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Puis créer un tableau d'objets Order

        // Pour l’instant, version fictive :
        $all = $this->getAll();
        $userCommandes = [];
        foreach ($all as $cmd) {
            if ($cmd->getUserId() == $userId) {
                $userCommandes[] = $cmd;
            }
        }
        return $userCommandes;
    }
}
