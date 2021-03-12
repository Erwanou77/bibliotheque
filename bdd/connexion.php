<?php
    session_start();
    $email = stripslashes(htmlspecialchars($_POST['email']));
    $password = stripslashes(htmlspecialchars($_POST['password']));
	if (isset($_POST['submit'])) {
        require"config.php";
        $select=$bdd->prepare("SELECT * FROM utilisateur WHERE email = '$email'");        
        if (isset($email)) {
            $select->execute(array($email));
        }
        $info = $select->fetch();
        if(isset($email) && $password == $info['mdp']){
            $_SESSION['connecter'] = true;
            $_SESSION["admin"] = $info['admin'];
            $_SESSION["idUtilisateur"] = $info['idUtilisateur'];
            $_SESSION["nom"] = $info['nom'];
            $_SESSION["prenom"] = $info['prenom'];
            $_SESSION["email"] = $info['email'];
            $_SESSION["time"] = time();
            header("location:../bibliotheque.php?page=1"); 
        }else{
            header("location:../accueil/accueil.php");
        }
    }
?>