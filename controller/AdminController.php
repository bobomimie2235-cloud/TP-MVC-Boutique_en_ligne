<?php
require_once 'model/Produit.php';
require_once 'repository/ProduitRepository.php';

class AdminController {
    private $repo;

    public function __construct() {
        $this->repo = new ProduitRepository();
    }

    public function produits() {
        $produits = $this->repo->getAll();
        require 'view/admin_produits.php';
    }
}
