<?php
$messagerie = new messagerie($_POST["nom"], $_POST['prenom'], $_POST["email"], $_POST["message"], $_POST["date"]); // enregsitrement des données //
$me = new Manager(); // nouvelles classe //
$me->messagerie($messagerie); // Permet l'insertion dans la base de données //
?>
