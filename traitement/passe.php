<?php
$mot_de_passe = new mot_de_passe($_POST["email"]); // enregsitrement des données //
$co = new Manager(); // nouvelles classe Manager//
$co->mot_de_passe($mot_de_passe);
$co->Mail($mot_de_passe);// Permet l'envoi des mail /
?>
