<?php
//déstruction de la session permettant la déconnexion d'une personne //
session_start();
session_destroy();
// Redirection vers la page d'accueil //
header('Location: ../index.php');

?>
