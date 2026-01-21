<?php
session_start();
require_once __DIR__ . '/config/Database.php';
require_once __DIR__ . '/config/Router.php';
require_once __DIR__ . '/controller/ProduitController.php';

$database = new Database();
$db = $database->getConnection();

$controller = new ProduitController($db);
$controller->index();
// Récupération de la route
$page = $_GET['page'] ?? 'accueil';

switch($page) {
    case 'login':
        require_once __DIR__ . '/controller/AuthController.php';
        $auth = new AuthController($db);
        $auth->showLogin();
        break;

    case 'products':
    require_once __DIR__ . '/controller/ProduitController.php';
    $prod = new ProduitController($db);
$prod->index();
    break;

    case 'panier':
        require_once __DIR__ . '/controller/CommandeController.php';
        $cmd = new CommandeController($db);
        $cmd->showPanier();
        break;

    // Autres pages...
    default:
        require_once __DIR__ . '/view/accueil.php';
        break;
}
