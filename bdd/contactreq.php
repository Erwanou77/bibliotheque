<?php

require("config.php");
if(empty($_POST["send"])) {

	$nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $sujet = htmlspecialchars($_POST["sujet"]);
    $message = nl2br(addslashes(htmlspecialchars($_POST["message"])));

	$subject = htmlspecialchars($_POST["sujet"]);

	$destinataires = "remi.petit93370@gmail.com, erwan.launay77@gmail.com, m.beaulieu@ecole-ipssi.net";

	$headers = "From: <" . $mail . "> \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset='utf-8'" . "\r\n";

	$messages = '<html>
					<body>';
	$messages .= '		<table style="margin: 0 auto;border: 2px solid #ddd;text-align: center;border-collapse: collapse;">';	
	$messages .= '			<thead>';
	$messages .= '				<td colspan="2" style="border: 1px solid #ddd;padding: 10px;"><img src="https://openvia.ipssi-sio.fr/img/logo1.png" width="150px" alt="logo du site" ></td>				
							</thead>';
	$messages .= '			<tbody>
								<tr style="background-color: black;color: white;">
									<th style="border: 1px solid #ddd;padding: 10px;">Nom de l\'expéditeur</th>
									<th style="border: 1px solid #ddd;padding: 10px;">Mail de l\'expéditeur</th>
								</tr>';								
	$messages .= '				<tr>
									<td style="border: 1px solid #ddd;padding: 10px;">' . $_POST["nom"] . ' ' . $_POST["prenom"] . '</td>
									<td style="border: 1px solid #ddd;padding: 10px;">' . $_POST["mail"] . '</td>
								</tr>';
	$messages .= '				<tr>
									<td colspan="2" style="border: 1px solid #ddd;padding: 10px;">' . nl2br($_POST["message"]) . '</td>
								</tr>
							</tbody>
						</table>
	 				</body>
	 			</html>';
	$messages = wordwrap($messages, 70, "\r\n");
	 			mail($destinataires, $subject, $messages, $headers);

    $sql = $bdd->query("INSERT INTO contact(nom, prenom, mail, telephone, sujet, message, date)
            VALUES ('{$nom}', '{$prenom}', '{$mail}', '{$telephone}', '{$sujet}', '{$message}', NOW())");


}
header('location:../contact.php');
?>