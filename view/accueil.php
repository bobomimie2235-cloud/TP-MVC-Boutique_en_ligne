<?php require 'layout/header.php'; ?>

<?php if (!empty($produits)): ?>
    <?php foreach ($produits as $produit): ?>
        <h3><?= htmlspecialchars($produit->getName()) ?></h3>
        <p><?= htmlspecialchars($produit->getDescription()) ?></p>
        <p><?= $produit->getPrice() ?> €</p>
        <hr>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun produit disponible.</p>
<?php endif; ?>


<?php require 'layout/footer.php'; ?>
