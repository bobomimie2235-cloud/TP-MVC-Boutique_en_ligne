<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail produit</title>
</head>
<body>

<?php if (!$produit): ?>
    <h1>Produit introuvable</h1>
    <a href="?page=produits">Retour</a>
<?php else: ?>
    <h1><?= $produit->getNom() ?></h1>
    <p>Prix HT : <?= $produit->getPrix() ?> €</p>
    <p>Prix TTC : <?= $produit->getPrixTTC() ?> €</p>
    <a href="?page=produits">Retour</a>
<?php endif; ?>

</body>
</html>
