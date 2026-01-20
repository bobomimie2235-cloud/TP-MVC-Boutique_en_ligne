<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Boutique MVC</title>
</head>
<body>
    <h1>Liste des Produits (Version MVC Objet)</h1>

    <a href="?page=form-ajout">Ajouter un produit</a>

    <ul>
        <?php foreach ($produits as $produit): ?>
            <li>
                <strong><?= $produit->getNom() ?></strong><br>
                Prix HT : <?= $produit->getPrix() ?> €<br>
                <small>Prix TTC : <?= $produit->getPrixTTC() ?> €</small><br>

                <a href="?page=produit&id=<?= $produit->getId() ?>">Voir</a>
                |
                <a href="?page=supprimer&id=<?= $produit->getId() ?>"
                   onclick="return confirm('Supprimer ?')">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
