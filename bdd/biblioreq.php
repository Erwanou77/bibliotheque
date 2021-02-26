<?php

include('config.php');
$pdostat = $bdd->query('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id');
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
if (isset($_POST['trie'])) {
	if ($_POST['trie']=="annee") {
		$pdostat = $bdd->query('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id ORDER BY annee');
	}elseif ($_POST['trie']=="nom") {
		$pdostat = $bdd->query('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id ORDER BY nom');
	}elseif ($_POST['trie']=="titre") {
		$pdostat = $bdd->query('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id ORDER BY titre');
	}else{
		$pdostat = $bdd->query('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id');
	}
}
?>
