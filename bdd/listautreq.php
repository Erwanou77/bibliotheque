<?php

include('config.php');
$pdostat = $bdd->query('SELECT * FROM auteurs');
$pdostat->setFetchMode(PDO::FETCH_ASSOC);

?>