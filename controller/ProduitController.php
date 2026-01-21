<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Produit.php';
require_once __DIR__ . '/../repository/ProduitRepository.php';

class ProduitController
{
    private ProduitRepository $repo;

    public function __construct(PDO $db)
    {
        $this->repo = new ProduitRepository($db);
    }

    public function listProducts(): void
    {
        $this->index();
    }


    // Afficher la liste des produits (page d'accueil)
    public function index(): void
    {
        $produits = $this->repo->getAll();
        require __DIR__ . '/../view/accueil.php';
    }


    // Afficher le formulaire d'ajout
    public function showAddForm(): void
    {
        require __DIR__ . '/../view/admin_produits.php';
    }

    // Ajouter un produit
    public function add(): void
    {
        echo '<pre>';
        var_dump($_POST);
        exit;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produit = new Product(
                $_POST['name'],
                $_POST['description'] ?? '',
                (float) $_POST['price'],
                (int) $_POST['stock']
            );

            $this->repo->insert($produit);

            header('Location: /TP-MVC');
            exit;
        }
    }
    //  Afficher le détail d’un produit
    public function show($id)
    {
        $produit = $this->repo->getById($id);
        require __DIR__ . '/../view/detail_produit.php';
    }


    //  Supprimer un produit
    public function delete(int $id): void
    {
        $this->repo->delete($id);
        header('Location: /TP-MVC');
        exit;
    }
}
