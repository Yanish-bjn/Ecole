<?php
$supprimer_contact = new supprimer_contact($_POST['id']); //enregistrement des données //
$sc = new supprimer(); // nouvelles classe  //
$sc->supprimer_contact($supprimer_contact);
?>
