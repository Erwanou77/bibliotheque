<?php

include('config.php');
$pdostate = $bdd->query('SELECT * FROM auteurs');
$pdostate->setFetchMode(PDO::FETCH_ASSOC);

?>