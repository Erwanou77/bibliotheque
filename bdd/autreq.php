<?php

require('config.php');
if (isset($_GET['id'])) {
	$pdostate = $bdd->query('SELECT DISTINCT p.*, g.libelle AS genre FROM personne p JOIN livre l ON p.id = l.idPersonne JOIN genre g ON l.genre = g.id WHERE p.id = '.$_GET['id']);
	$pdostate->setFetchMode(PDO::FETCH_ASSOC);
}
?>