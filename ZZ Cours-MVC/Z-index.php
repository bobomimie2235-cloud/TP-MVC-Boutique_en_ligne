<?php
require_once '/../db.php';

$pdo = getPDO();
echo "Connexion réussie ✅";



// require_once __DIR__ . '/Controllers/ProductController.php';

// $page = $_GET['page'] ?? 'home';

// switch ($page) {

//     case 'produits':
//         $controller = new ProductController();
//         $controller->index();
//         break;

//     case 'form-ajout':
//         $controller = new ProductController();
//         $controller->showAddForm();
//         break;

//     case 'ajout-produit':
//         $controller = new ProductController();
//         $controller->add();
//         break;

//     case 'produit':
//         $controller = new ProductController();
//         $controller->show((int)($_GET['id'] ?? 0));
//         break;

//     case 'supprimer':
//         $controller = new ProductController();
//         $controller->delete((int)($_GET['id'] ?? 0));
//         break;

//     case 'home':
//     default:
//         echo "<h1>Bienvenue sur l'accueil</h1>";
//         echo "<a href='?page=produits'>Voir la liste des produits</a>";
//         break;
// }
