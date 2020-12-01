<?php
$mot_de_passe_oublie= new mot_de_passe_oublie($_POST["code"], $_POST['mdp']); // enregsitrement des données //
$co = new Manager(); // nouvelles classe manager //
$co->mot_de_passe_oublie($mot_de_passe_oublie); // Permet l'insertion dans la base de données //
?>
