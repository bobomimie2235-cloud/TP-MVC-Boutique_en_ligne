<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Produit.php';
require_once __DIR__ . '/../repository/ProduitRepository.php';

class ProduitController {
    private ProduitRepository $repo;

    public function __construct() {
        $this->repo = new ProduitRepository();
    }

    // Afficher la liste des produits (page d'accueil)
    public function index(): void {
        $produits = $this->repo->getAll();
        require __DIR__ . '/../view/accueil.php';
    }


    // Afficher le formulaire d'ajout
    public function showAddForm(): void {
        require __DIR__ . '/../view/admin_produits.php';
    }

    // Ajouter un produit
    public function add(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produit = new Product();
            $produit->setName($_POST['name']);
            $produit->setDescription($_POST['description'] ?? '');
            $produit->setPrice((float) $_POST['price']);
            $produit->setImage($_POST['image'] ?? '');
            $produit->setStock((int) $_POST['stock']);

            $this->repo->insert($produit);

            header('Location: /TP-MVC');
            exit;
        }
    }

    //  Afficher le détail d’un produit
    public function show(int $id): void {
        $produit = $this->repo->getById($id);
        require __DIR__ . '/../view/detail_produit.php';
    }


    //  Supprimer un produit
    public function delete(int $id): void {
        $this->repo->delete($id);
        header('Location: /TP-MVC');
        exit;
    }
}


