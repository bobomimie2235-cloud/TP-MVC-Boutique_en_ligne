<?php

require_once 'config/Database.php';
require_once 'config/Router.php';

// Démarrage de la session
session_start();

// Lancer le routeur
$router = new Router();
$router->route($_SERVER['REQUEST_URI']);