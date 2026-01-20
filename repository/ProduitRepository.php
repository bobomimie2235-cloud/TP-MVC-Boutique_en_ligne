<?php
require_once 'config/Database.php';
require_once 'model/Produit.php';

class ProduitRepository {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM produit");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Produit');
    }
}
