<?php
$ajouter_emploi = new ajouter_emploi($_POST["nom_entreprise"], $_POST["adresse"], $_POST['rue'], $_POST['email'], $_POST['date']); //enregistrement des données //
$ae = new Manager(); // nouvelles classe  //
$ae->ajouter_emploi($ajouter_emploi); // Permet l'insertion dans la base de données //
?>
