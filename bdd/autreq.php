<?php

require('config.php');
if (isset($_GET['id'])) {
	$pdostate = $bdd->query('SELECT DISTINCT p.*, g.libelle AS genre FROM `personne` p JOIN auteur a ON p.id = a.idPersonne JOIN livre l ON a.idLivre = l.isbn JOIN genre g ON l.genre = g.id WHERE p.id ='.$_GET['id']);
	$pdostate->setFetchMode(PDO::FETCH_ASSOC);
}
?>