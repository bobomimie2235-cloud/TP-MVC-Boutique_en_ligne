<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Produit.php';

class ProduitRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM products");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $produits = [];
        foreach ($rows as $row) {
            $produits[] = new Product(
                $row['id'],
                $row['nom'],
                $row['prix']
            );
        }

        return $produits;
    }

    public function getById(int $id): ?Product
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new Product(
            $row['id'],
            $row['nom'],
            $row['prix']
        );
    }

    public function insert(Product $produit): void
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO products (nom, prix)
            VALUES (:nom, :prix)
        ");

        $stmt->execute([
            'nom'  => $produit->getName(),
            'prix' => $produit->getPrice()
        ]);
    }

    public function delete(int $id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
