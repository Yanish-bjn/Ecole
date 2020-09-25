<?php
$modifier_evenement = new modifier_evenement($_POST["nom_evenement"], $_POST["nom_personne"], $_POST["date"], $_POST['description'], $_POST['id']); // enregsitrement des données //
$me = new Manager(); // nouvelles classe //
$me->modifier_evenement($modifier_evenement);
?>
