<?php
require_once __DIR__ . '/../model/Commande.php';
require_once __DIR__ . '/../repository/CommandeRepository.php';

class CommandeController {
    private $repo;

    public function __construct() {
        $this->repo = new CommandeRepository();
    }

    public function index() {
        $commandes = $this->repo->getAll();
        require __DIR__ . '/../view/historique.php';
    }
}

