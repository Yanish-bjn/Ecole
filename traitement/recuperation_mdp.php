<?php
$mot_de_passe_oublie= new mot_de_passe_oublie($_POST['mdp'], $_POST["email"]); // enregsitrement des données //
$co = new Manager(); // nouvelles classe manager //
$co->mot_de_passe_oublie($mot_de_passe_oublie);
?>
