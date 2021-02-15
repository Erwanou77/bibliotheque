<?php

include('config.php');
$pdostate = $bdd->query('SELECT * FROM auteur');
$pdostate->setFetchMode(PDO::FETCH_ASSOC);

?>