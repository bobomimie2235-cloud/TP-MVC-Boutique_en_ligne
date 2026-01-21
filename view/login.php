<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>

<body>

    <h1>Connexion</h1>

    <?php if (!empty($error)): ?>
        <div style="color:red;"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="POST" action="/login">
        <label>Email :</label><br>
        <input type="email" name="email"
            value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
        <br><br>

        <label>Mot de passe :</label><br>
        <input type="password" name="password">
        <br><br>

        <button type="submit">Se connecter</button>
    </form>

</body>

</html>