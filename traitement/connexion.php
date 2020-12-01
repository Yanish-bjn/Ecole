<?php
$connexion = new connexion($_POST['email'], $_POST['mdp'],$_POST['role']); //enregistrement des données //
$co = new Manager(); // nouvelles classe  //
$co->connexion($connexion); // Permet l'insertion dans la base de données //
?>
