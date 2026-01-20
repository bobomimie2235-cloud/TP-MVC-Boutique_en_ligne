<?php

class Router {
    public function route($url) {
        // Nettoyer l'URL
        $url = trim($url, '/');
        $urlParts = explode('/', $url);

        $controller = $urlParts[0] ?? 'accueil';
        $action = $urlParts[1] ?? 'index';

        switch($controller) {
            case 'produit':
                require_once __DIR__ . '/../controller/ProduitController.php';
                $ctrl = new ProduitController();
                break;

            case 'commande':
                require_once __DIR__ . '/../controller/CommandeController.php';
                $ctrl = new CommandeController();
                break;

            case 'utilisateur':
                require_once __DIR__ . '/../controller/UtilisateurController.php';
                $ctrl = new UtilisateurController();
                break;

            case 'admin':
                require_once __DIR__ . '/../controller/AdminController.php';
                $ctrl = new AdminController();
                break;

            default:
                // Route par défaut vers l'accueil
                require_once __DIR__ . '/../controller/ProduitController.php';
                $ctrl = new ProduitController();
                break;
        }

        // Appeler l'action si elle existe
        if (isset($ctrl) && method_exists($ctrl, $action)) {
            $ctrl->$action();
        } else {
            echo "Page non trouvée";
        }
    }
}



