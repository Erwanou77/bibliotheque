<?php

include('config.php');
$pdostat = $bdd->query('SELECT titre, prenom, nom,editeur,annee,isbn FROM livre JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id;');
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
if (isset($_POST['trie'])) {
	if ($_POST['trie']=="annee") {
		$pdostat = $bdd->query('SELECT titre, prenom, nom,editeur,annee,isbn FROM livre JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id ORDER BY annee');
	}elseif ($_POST['trie']=="nom") {
		$pdostat = $bdd->query('SELECT titre, prenom, nom,editeur,annee,isbn FROM livre JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id ORDER BY nom');
	}else{
		$pdostat = $bdd->query('SELECT titre, prenom, nom,editeur,annee,isbn FROM livre JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id ORDER BY isbn');
	}
}
?>
