<?php
function getPDO(): PDO {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=boutique_en_ligne;charset=utf8mb4', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur BDD : " . $e->getMessage());
    }
}

?>