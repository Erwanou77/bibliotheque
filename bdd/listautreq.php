<?php

include('config.php');
$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
$limite = 9;
$debut = ($page - 1) * $limite;
$nbligne = $bdd->query('SELECT COUNT(isbn) FROM livre');
$nbTotal = $nbligne->fetchColumn();
$nbPages = ceil($nbTotal / $limite);
$pdostate = $bdd->prepare('SELECT DISTINCT personne.*, genre.libelle AS genre FROM personne JOIN livre ON personne.id = livre.idPersonne JOIN genre ON livre.genre = genre.id LIMIT :limite OFFSET :debut');
$pdostate->bindValue('debut', $debut, PDO::PARAM_INT);
$pdostate->bindValue('limite', $limite, PDO::PARAM_INT);
$pdostate->execute();
?>
