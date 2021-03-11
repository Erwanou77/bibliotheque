<?php

include('config.php');
$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
$limite = 9;
$debut = ($page - 1) * $limite;
$nbligne = $bdd->query('SELECT COUNT(isbn) FROM livre');
$nbTotal = $nbligne->fetchColumn();
$nbPages = ceil($nbTotal / $limite);
$pdostat = $bdd->prepare('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN personne ON livre.idPersonne = personne.id LIMIT :limite OFFSET :debut');
$pdostat->bindValue('debut', $debut, PDO::PARAM_INT);
$pdostat->bindValue('limite', $limite, PDO::PARAM_INT);
$pdostat->execute();

if (isset($_POST['trie'])) {
	if ($_POST['trie']=="annee") {
		$pdostat = $bdd->prepare('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN personne ON livre.idPersonne = personne.id ORDER BY annee LIMIT :limite OFFSET :debut');
		$pdostat->bindValue('debut', $debut, PDO::PARAM_INT);
		$pdostat->bindValue('limite', $limite, PDO::PARAM_INT);
		$pdostat->execute();
	}elseif ($_POST['trie']=="nom") {
		$pdostat = $bdd->prepare('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN personne ON livre.idPersonne = personne.id ORDER BY nom LIMIT :limite OFFSET :debut');
		$pdostat->bindValue('debut', $debut, PDO::PARAM_INT);
		$pdostat->bindValue('limite', $limite, PDO::PARAM_INT);
		$pdostat->execute();
	}elseif ($_POST['trie']=="titre") {
		$pdostat = $bdd->prepare('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN personne ON livre.idPersonne = personne.id ORDER BY titre LIMIT :limite OFFSET :debut');
		$pdostat->bindValue('debut', $debut, PDO::PARAM_INT);
		$pdostat->bindValue('limite', $limite, PDO::PARAM_INT);
		$pdostat->execute();
	}elseif ($_POST['trie']=="reserv") {
		$pdostat = $bdd->prepare('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN personne ON livre.idPersonne = personne.id ORDER BY utilisateur DESC LIMIT :limite OFFSET :debut');
		$pdostat->bindValue('debut', $debut, PDO::PARAM_INT);
		$pdostat->bindValue('limite', $limite, PDO::PARAM_INT);
		$pdostat->execute();
	}else{
		$pdostat = $bdd->prepare('SELECT *,editeur.libelle AS editeurs FROM livre JOIN editeur ON livre.editeur = editeur.id JOIN personne ON livre.idPersonne = personne.id LIMIT :limite OFFSET :debut');
		$pdostat->bindValue('debut', $debut, PDO::PARAM_INT);
		$pdostat->bindValue('limite', $limite, PDO::PARAM_INT);
		$pdostat->execute();
	}
}
?>
