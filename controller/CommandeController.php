<?php
require_once __DIR__ . '/../model/Commande.php';
require_once __DIR__ . '/../repository/CommandeRepository.php';
require_once __DIR__ . '/../model/DetailCommande.php';
require_once __DIR__ . '/../repository/DetailCommandeRepository.php';

class CommandeController {
    private $db;
    private $repo;
    private $detailRepo;

    public function __construct(PDO $db) {
        $this->db = $db;
        $this->repo = new CommandeRepository($db);        // commandes
        $this->detailRepo = new DetailCommandeRepository($db); // détails / panier
    }

    // Affiche toutes les commandes de l'utilisateur
    public function index() {
        session_start();
        $userId = $_SESSION['user_id'] ?? null;

        if (!$userId) {
            header('Location: index.php?page=login');
            exit;
        }

        $commandes = $this->repo->getByUserId($userId);
        require __DIR__ . '/../view/historique.php';
    }

    // Affiche le panier actuel
    public function showPanier() {
        session_start();

        $userId = $_SESSION['user_id'] ?? null;
        if (!$userId) {
            header('Location: index.php?page=login');
            exit;
        }

        // Récupérer les items du panier
        $items = $this->detailRepo->getByOrderId($userId);

        require __DIR__ . '/../view/panier.php';
    }
}
