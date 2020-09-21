<?php
$supprimer_evenement = new supprimer_evenement($_POST["nom_evenement"]); // enregsitrement des données //
$sup = new Manager(); // nouvelles classe //
$sup->supprimer_evenement($supprimer_evenement);
?>
