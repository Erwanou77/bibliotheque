<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="../css/accueilstyle.css"/>
</head>
<body>
    <form class="form" action="../bdd/connexion.php" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="email" class="login-input" name="email" placeholder="Votre mail" required>
        <input type="password" class="login-input" name="password" placeholder="Votre mot de passe" required>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Vous n'avez pas de compte ? <a href="registration.php">S'enregistrer</a></p>
    </form>
</body>
</html>
