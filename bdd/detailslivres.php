
<?php

require"config.php";
if (isset($_GET['isbn'])) {
	$pdostat = $bdd->query("SELECT * FROM livres WHERE isbn =".$_GET['isbn']);
	$pdostat->setFetchMode(PDO::FETCH_ASSOC);
}

?>