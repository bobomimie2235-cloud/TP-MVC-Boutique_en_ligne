<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../Models/Product/ProductManager.php';
require_once __DIR__ . '/../Models/Product/Product.php';

class ProductController {

public function index(): void {
    $pdo = getPDO();
}
}