<?php
$supprimer_client = new supprimer_client($_GET["id"]); // enregsitrement des données //
$sup = new Manager(); // nouvelles classe //
$sup->supprimer_client($supprimer_client); // Permet l'insertion dans la base de données //
?>
