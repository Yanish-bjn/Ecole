<?php
$contact = new contact($_POST["nom"], $_POST["email"], $_POST["sujet"], $_POST["message"], $_POST['date']); // enregsitrement des données //
$co = new Manager(); // nouvelles classe //
$co->contact($contact); // Permet l'insertion dans la base de données //
$co->Mail($contact); //Permt l'envoie des mails //
?>
