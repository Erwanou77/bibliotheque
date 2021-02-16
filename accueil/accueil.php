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
        <input type="password" class="login-input" name="password" placeholder="Votre mot de passe" required>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
    </form>
</body>
</html>
