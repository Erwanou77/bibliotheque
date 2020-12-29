<?php

require('config.php');
if (isset($_GET['id'])) {
		$pdostat = $bdd->query('SELECT * FROM auteurs WHERE id ='.$_GET['id']);
		$pdostat->setFetchMode(PDO::FETCH_ASSOC);
}



?>