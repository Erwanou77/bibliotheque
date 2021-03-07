<?php 
    session_start();
    $erreur = "Entrez vos informations";
    if (isset($_POST['submit'])) {
        require'../bdd/config.php';
        $idclient = stripslashes(htmlspecialchars($_POST['idclient']));
        $nom = stripslashes(htmlspecialchars($_POST['nom']));
        $prenom = stripslashes(htmlspecialchars($_POST['prenom']));
        $email = stripslashes(htmlspecialchars($_POST['email']));
        $requser = $bdd->query('SELECT COUNT(*) AS idClient FROM utilisateur WHERE idClient = ' . $idclient);
        $requser->setFetchMode(PDO::FETCH_ASSOC);
        $resuser = $requser->fetch();
        if ($resuser['idClient'] == 0) {
            $erreur = "Cet identifiant n'existe pas";
        }elseif(empty($nom)) {
            $erreur = "Vous devez mettre un nom";
        }elseif (empty($prenom)) {
            $erreur = "Vous devez mettre un prenom";
        }elseif (empty($email)) {
            $erreur = "Vous devez mettre un mail";
        }else{      
            $select=$bdd->prepare("UPDATE utilisateur SET nom = :nom, prenom = :prenom, email = :email WHERE idClient = " . $idclient);
            $select->bindParam(':nom', $nom);
            $select->bindParam(':prenom', $prenom);
            $select->bindParam(':email', $email);
            $select->execute();
            header("location:../accueil/accueil.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/accueilstyle.css"/>
</head>
<body>
    <form class="form" method="post">
        <h1 class="login-title">Inscription</h1>
        <div class="erreur">
            <h3><?php echo $erreur; ?></h3>
        </div>
        <input type="number" class="login-input" name="idclient" placeholder="Identifiant client" required />
        <input type="text" class="login-input" name="nom" placeholder="Nom" />
        <input type="text" class="login-input" name="prenom" placeholder="Prenom" />
        <input type="email" class="login-input" name="email" placeholder="Votre adresse mail">
        <input type="password" class="login-input" name="password" placeholder="Votre mot de passe" minlength="6">
        <input type="submit" name="submit" value="S'enregistrer" class="login-button">
        <p class="link">Vous avez déjà un compte ? <a href="accueil.php">Se connecter ici</a></p>
    </form>
</body>
</html>
