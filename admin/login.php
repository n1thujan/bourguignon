<?php
require_once 'functions.php';

// Si l'administrateur est déjà connecté
if (estConnecte()) {
    header('Location: index.php');
    exit;
}

$erreur = '';

if (isset($_POST['connexion'])) {
    $identifiant = $_POST['user'];
    $motDePasse = $_POST['pass'];

    if ($identifiant === ADMIN_USER && $motDePasse === ADMIN_PASS) {
        $_SESSION['logged'] = true;
        header('Location: index.php');
        exit;
    } else {
        $erreur = 'Identifiant ou mot de passe incorrect.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Le Bourguignon</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

<div class="login-page">
    <div class="login-box">
        <h1>Le Bourguignon</h1>
        <p>Administration du site</p>

        <form method="post">
            <div class="form-group">
                <label>Identifiant</label>
                <input type="text" name="user" required>
            </div>

            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="pass" required>
            </div>

            <button class="btn" type="submit" name="connexion">
                Se connecter
            </button>

            <?php if ($erreur != ''): ?>
                <p class="error"><?= htmlspecialchars($erreur) ?></p>
            <?php endif; ?>
        </form>
    </div>
</div>

</body>
</html>
