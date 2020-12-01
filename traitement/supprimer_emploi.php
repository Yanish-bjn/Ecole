<?php
$supprimer_emploi = new ajouter_emploi($_POST['id']); //enregistrement des données //
$se = new Manager(); // nouvelles classe  //
$se->supprimer_emploi($supprimer_emploi); // Permet l'insertion dans la base de données //
?>
