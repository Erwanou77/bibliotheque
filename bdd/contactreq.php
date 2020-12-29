<?php

require("config.php");
if(empty($_POST["send"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $telephone = $_POST["telephone"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];

    $sql = $bdd->query("INSERT INTO contact(nom, prenom, mail, telephone, sujet, message, date)
            VALUES ('{$nom}', '{$prenom}', '{$mail}', '{$telephone}', '{$sujet}', '{$message}', NOW())");
}

?>