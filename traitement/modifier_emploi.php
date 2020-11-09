<?php
$modifier_emploi = new modifier_emploi($_POST["nom_entreprise"], $_POST["adresse"], $_POST['rue'], $_POST['email'], $_POST['date'], $_POST['id']); //enregistrement des données //
$me = new Manager(); // nouvelles classe  //
$me->modifier_emploi($modifier_emploi);
?>
