<?php
require_once __DIR__ . '/Product.php';

class ProductManager {
    /**
    * @ return Product[]
    */
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM products");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $result = $stmt->fetchALL();
        // echo "<pre>";
        // var_dump($result);
        return $result;
    }

    public function insert(Product $product): void{
        $sql = "INSERT INTO produits (nom, prix) VALUES (:nom, :prix)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'nom' => $product->getNom(),
            'prix' => $product->getPrix()
        ]);
    }

    public function findById(int $id): ?Product {
        $stmt = $this->db->prepare("SELECT * FROM produits WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $stmt->execute(['id' => $id]);

        $product = $stmt->fetch();
        return $product ?: null;
    }

    public function delete(int $id): void {
        $stmt = $this->db->prepare("DELETE FROM produits WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}

?>