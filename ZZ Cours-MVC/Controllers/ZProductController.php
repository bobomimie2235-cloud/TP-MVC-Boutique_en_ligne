<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../Models/Product/ProductManager.php';
require_once __DIR__ . '/../Models/Product/Product.php';

class ProductController {

    public function index(): void {
        $pdo = getPDO();
        $manager = new ProductManager($pdo);
        $produits = $manager->findAll();
        require_once __DIR__ . '/../Views/liste_produits.php';
    }

    public function showAddForm(): void {
        require_once __DIR__ . '/../Views/form_ajout.php';
    }

    public function add(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = new Product();
            $product->setNom($_POST['nom']);
            $product->setPrix((float) $_POST['prix']);

            $pdo = getPDO();
            $manager = new ProductManager($pdo);
            $manager->insert($product);

            header('Location: ?page=produits');
            exit;
        }
    }

    public function show(int $id): void {
        $pdo = getPDO();
        $manager = new ProductManager($pdo);
        $produit = $manager->findById($id);

        require_once __DIR__ . '/../Views/detail_produit.php';
    }

    public function delete(int $id): void {
        $pdo = getPDO();
        $manager = new ProductManager($pdo);
        $manager->delete($id);

        header('Location: ?page=produits');
        exit;
    }
}
