<?php

require('config.php');
if (isset($_GET['id'])) {
		$pdostate = $bdd->query('SELECT * FROM auteurs JOIN bibliographie ON auteurs.id = bibliographie.id_biblio WHERE id ='.$_GET['id']);
		$pdostate->setFetchMode(PDO::FETCH_ASSOC);
}



?>