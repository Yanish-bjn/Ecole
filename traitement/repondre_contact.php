<?php
$repondre_contact = new repondre_contact($_POST["nom"], $_POST["email"], $_POST["sujet"], $_POST["message"], $_POST["date"]); // enregsitrement des données //
$rc = new Manager(); // nouvelles classe //
$rc->repondre_contact($repondre_contact); // Permet l'insertion dans la base de données //
?>
