<?php

include('config.php');
$pdostat = $bdd->query('SELECT titre,auteur,editeur,date,isbn FROM livre');
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
if (isset($_POST['trie'])) {
	if ($_POST['trie']=="date") {
		$pdostat = $bdd->query('SELECT * FROM livre ORDER BY date');
	}elseif ($_POST['trie']=="auteur") {
		$pdostat = $bdd->query('SELECT * FROM livre ORDER BY auteurs');
	}else{
		$pdostat = $bdd->query('SELECT * FROM livre ORDER BY id');
	}
}
?>
