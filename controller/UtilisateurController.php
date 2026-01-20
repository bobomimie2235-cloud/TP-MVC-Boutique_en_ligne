<?php
require_once __DIR__ . '/../repository/UtilisateurRepository.php';
require_once __DIR__ . '/../model/Utilisateur.php';

class UtilisateurController {
    private $repo;

    public function __construct() {
        $this->repo = new UtilisateurRepository();
    }

    public function login() {
        require 'view/login.php';
    }
}
