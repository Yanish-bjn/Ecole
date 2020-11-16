<?php
$supprimer_contact = new supprimer_contact($_GET['id']); //enregistrement des données //
$sc = new Manager(); // nouvelles classe  //
$sc->supprimer_contact($supprimer_contact);
?>
