<?php
    $idclient = stripslashes(htmlspecialchars($_POST['idclient']));
    $password = stripslashes(htmlspecialchars($_POST['password']));
	if (isset($_POST['submit'])) {
        require"config.php";
        $select=$bdd->prepare("SELECT * FROM users WHERE idclient = '$idclient' AND password = '$password'");
        $select->execute(array($idclient,$password));
        $tableau = $select->fetch();
        if(count($tableau)>0){
            $_SESSION["idsession"] = $username;
            header("location:../auteur.php"); 
        }
    }
?>