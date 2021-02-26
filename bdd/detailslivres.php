
<?php

require"config.php";
if (isset($_GET['isbn'])) {
	$pdostat = $bdd->query("SELECT livre.*, personne.prenom AS prenom, personne.nom AS nom, genre.libelle AS genre, editeur.libelle AS editeur FROM livre JOIN genre ON livre.genre = genre.id JOIN editeur ON livre.editeur = editeur.id JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id WHERE isbn =".$_GET['isbn']);
	$pdostat->setFetchMode(PDO::FETCH_ASSOC);
}

?>
