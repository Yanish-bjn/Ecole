<?php
$evenement = new evenement($_POST["nom_evenement"], $_POST["nom_personne"], $_POST["date"], $_POST['description']); // enregsitrement des données //
$ev = new Manager(); // nouvelles classe //
$ev->evenement($evenement); // Permet l'insertion dans la base de données //
?>
