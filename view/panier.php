<?php
session_start();
require __DIR__ . '/layout/header.php';
?>

<h1>Mon Panier</h1>

<?php if (empty($items)): ?>
    <p>Votre panier est vide.</p>
<?php else: ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $grandTotal = 0;
            foreach($items as $item): 
                $total = $item->getQuantity() * $item->getPrice();
                $grandTotal += $total;
            ?>
            <tr>
                <td><?php echo htmlspecialchars($item->getProductId()); ?></td>
                <td><?php echo $item->getQuantity(); ?></td>
                <td><?php echo number_format($item->getPrice(), 2); ?> €</td>
                <td><?php echo number_format($total, 2); ?> €</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><strong>Total panier : <?php echo number_format($grandTotal, 2); ?> €</strong></p>
    <a href="index.php?page=checkout">Passer à la caisse</a>
<?php endif; ?>

<?php require __DIR__ . '/layout/footer.php'; ?>

