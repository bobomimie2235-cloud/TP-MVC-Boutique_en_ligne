<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un produit</title>
</head>
<body>

<h1>Ajouter un produit</h1>

<form method="POST" action="?page=ajout-produit">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Prix :</label><br>
    <input type="number" step="0.01" name="prix" required><br><br>

    <button type="submit">Ajouter</button>
</form>

<a href="?page=produits">Retour</a>

</body>
</html>
