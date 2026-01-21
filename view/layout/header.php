<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ma Boutique</title>
    <link rel="stylesheet" href="/assets/css/style.css"> <!-- ton CSS -->
    <style>
        /* Menu simple en ligne */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background: #333;
            color: #fff;
            padding: 10px 20px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .menu {
            display: flex;
            align-items: center;
        }

        .logo {
            font-weight: bold;
            font-size: 1.5em;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <div class="logo">
                <a href="/TP-MVC/">Ma Boutique</a>
            </div>
            <div class="menu">
                <a href="<?php echo $baseUrl; ?>/index.php">Accueil</a>
                <a href="<?php echo $baseUrl; ?>/index.php?page=produits">Produits</a>
                <a href="<?php echo $baseUrl; ?>/index.php?page=panier">Panier</a>

                <?php if (!empty($_SESSION['user_id'])): ?>
                    <a href="<?php echo $baseUrl; ?>/index.php?page=dashboard">Mon compte</a>
                    <a href="<?php echo $baseUrl; ?>/index.php?page=logout">Déconnexion</a>
                <?php else: ?>
                    <a href="<?php echo $baseUrl; ?>/index.php?page=login">Connexion</a>
                    <a href="<?php echo $baseUrl; ?>/index.php?page=register">Inscription</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>