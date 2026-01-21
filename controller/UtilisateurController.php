<?php
require_once __DIR__ . '/../repository/UtilisateurRepository.php';
require_once __DIR__ . '/../model/Utilisateur.php';
require_once __DIR__ . '/../config/Database.php';

class UtilisateurController {

    private UtilisateurRepository $repo;

    public function __construct() {

        $database = new Database();
        $db = $database->getConnection();

        $this->repo = new UtilisateurRepository($db);
    }

    public function login() {
        require 'view/login.php';
    }
}

