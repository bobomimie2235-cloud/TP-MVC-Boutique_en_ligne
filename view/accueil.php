<?php require 'layout/header.php'; ?>

<h2>Produits disponibles</h2>
<ul>
<?php foreach($produits as $produit): ?>
    <li><?= $produit->nom ?> - <?= $produit->prix ?> €</li>
<?php endforeach; ?>
</ul>

<?php require 'layout/footer.php'; ?>
