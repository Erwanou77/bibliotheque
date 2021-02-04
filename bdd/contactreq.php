<?php

require("config.php");
if(empty($_POST["send"])) {

	$to = 'bob@example.com';

	$subject = htmlspecialchars($_POST["sujet"]);

	$headers = "From: <erwan.launay77@gmail.com> \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset='utf-8'" . "\r\n";

	$messages = '<html>
					<body>
						<div align="center">
							<img src="https://bibliotheque-erwan-logan.000webhostapp.com/img/logo1.png" width="150px">
							<br>
							<u>Nom de l\'expéditeur : </u>' . $_POST["nom"] . ' ' . $_POST["prenom"] . '<br>
							<u>Mail de l\'expéditeur : </u>' . $_POST["mail"] . '<br><br>
							' . nl2br($_POST["message"]) . '
						</div>
	 				</body>
	 			</html>';
	 			mail("erwan.launay77@gmail.com", "Contact pour mon site", $messages, $headers);

    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $sujet = htmlspecialchars($_POST["sujet"]);
    $message = nl2br(addslashes(htmlspecialchars($_POST["message"])));

    $sql = $bdd->query("INSERT INTO contact(nom, prenom, mail, telephone, sujet, message, date)
            VALUES ('{$nom}', '{$prenom}', '{$mail}', '{$telephone}', '{$sujet}', '{$message}', NOW())");


}
header('location:../contact.php');
?>