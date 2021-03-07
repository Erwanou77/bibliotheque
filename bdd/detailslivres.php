
<?php

require"config.php";
if (isset($_GET['isbn'])) {
	$pdostat = $bdd->query("SELECT livre.*, personne.prenom AS prenom, personne.nom AS nom, genre.libelle AS genres, editeur.libelle AS editeurs, langue.libelle AS langues FROM livre JOIN genre ON livre.genre = genre.id JOIN editeur ON livre.editeur = editeur.id JOIN langue ON livre.langue = langue.id JOIN personne ON livre.idPersonne = personne.id WHERE isbn =".$_GET['isbn']);
	$pdostat->setFetchMode(PDO::FETCH_ASSOC);
}

?>
