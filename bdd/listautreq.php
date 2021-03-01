<?php

include('config.php');
$pdostate = $bdd->query('SELECT DISTINCT personne.*, genre.libelle AS genre FROM personne JOIN livre ON personne.id = livre.idPersonne JOIN genre ON livre.genre = genre.id;');
$pdostate->setFetchMode(PDO::FETCH_ASSOC);

?>
