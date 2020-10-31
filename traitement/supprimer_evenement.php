<?php
$supprimer_evenement = new supprimer_evenement($_GET["id"]); // enregsitrement des données //
$sup = new Manager(); // nouvelles classe //
$sup->supprimer_evenement($supprimer_evenement);
?>
