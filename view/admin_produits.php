<h2>Ajouter un produit</h2>

<form method="POST" action="/TP-MVC/index.php?action=add-product">
    <input type="text" name="name" placeholder="Nom" required><br><br>

    <textarea name="description" placeholder="Description"></textarea><br><br>

    <input type="number" step="0.01" name="price" placeholder="Prix" required><br><br>

    <input type="number" name="stock" placeholder="Stock" required><br><br>

    <input type="text" name="image" placeholder="Image"><br><br>

    <button type="submit">Créer</button>
</form>