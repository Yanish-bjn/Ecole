<?php
$ajouter_client = new ajouter_client($_POST["nom"], $_POST["prenom"], $_POST['email'], $_POST['ville'], $_POST['tel'], $_POST['mdp'], $_POST['role']); //enregistrement des données //
$ac = new Manager(); // nouvelles classe  //
$ac->ajouter_client($ajouter_client); // Permet l'insertion dans la base de données //
$ac->Mail($ajouter_client); //Permt l'envoie des mails //
?>
