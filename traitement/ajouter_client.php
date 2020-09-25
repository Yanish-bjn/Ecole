<?php
$ajouter_client = new ajouter_client($_POST["nom"], $_POST["prenom"], $_POST['email'], $_POST['tel'], $_POST['mdp'], $_POST['role']); //enregistrement des données //
$ac = new Manager(); // nouvelles classe  //
$ac->ajouter_client($ajouter_client);
$ac->Mail($ajouter_client); //Permt l'envoie des mails //
?>
