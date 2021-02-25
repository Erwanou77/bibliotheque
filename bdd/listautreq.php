<?php

include('config.php');
$pdostate = $bdd->query('SELECT DISTINCT personne.*, genre.libelle AS genre FROM `personne` JOIN auteur ON personne.id = auteur.idPersonne JOIN livre ON auteur.idLivre = livre.isbn JOIN genre ON livre.genre = genre.id;');
$pdostate->setFetchMode(PDO::FETCH_ASSOC);

?>
