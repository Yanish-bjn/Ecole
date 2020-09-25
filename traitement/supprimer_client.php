<?php
$supprimer_client = new supprimer_client($_POST["nom"]); // enregsitrement des données //
$sup = new Manager(); // nouvelles classe //
$sup->supprimer_client($supprimer_client);
?>
