<?php 

include('config.php');
$pdostat = $bdd->query('SELECT titres,auteurs,editeurs,date,isbn FROM livres');
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
if (isset($_POST['trie'])) {
	if ($_POST['trie']=="dates") {
		$pdostat = $bdd->query('SELECT * FROM livres ORDER BY date');
	}elseif ($_POST['trie']=="auteur") {
		$pdostat = $bdd->query('SELECT * FROM livres ORDER BY auteurs');
	}else{
		$pdostat = $bdd->query('SELECT * FROM livres ORDER BY id');	
	}
}
?>