<?php
    session_start();
    $email = stripslashes(htmlspecialchars($_POST['email']));
    $password = stripslashes(htmlspecialchars(md5($_POST['password'])));
	if (isset($_POST['submit'])) {
        require"config.php";
        $select=$bdd->prepare("SELECT * FROM users WHERE email = '$email'");        
        if (isset($email)) {
            $select->execute(array($email));
        }
        $info = $select->fetch();
        if(isset($email) && $password == $info['password']){
            
            $_SESSION["nom"] = $info['nom'];
            $_SESSION["prenom"] = $info['prenom'];
            $_SESSION["email"] = $info['email'];
            header("location:../users/profil.php"); 
        }else{
            header("location:../accueil/accueil.php");
        }
    }
?>