<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="../css/accueilstyle.css"/>
</head>
<body>
    <form class="form" action="../bdd/verification.php" method="post">
        <h1 class="login-title">Inscription</h1>
        <input type="text" class="login-input" name="nom" placeholder="Nom" required />
        <input type="text" class="login-input" name="prenom" placeholder="Prenom" required />
        <input type="email" class="login-input" name="email" placeholder="Votre adresse mail" required>
        <input type="password" class="login-input" name="password" placeholder="Votre mot de passe" required minlength="6">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Vous avez déjà un compte ? <a href="accueil.php">Se connecter ici</a></p>
    </form>
</body>
</html>
