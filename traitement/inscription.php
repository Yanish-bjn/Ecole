<?php
$inscription = new inscription($_POST["nom"], $_POST["prenom"], $_POST['email'], $_POST['tel'], $_POST['mdp']); //enregistrement des données //
$inscrit = new Manager(); // nouvelles classe  //
$inscrit->inscription($inscription);
$inscrit->Mail($inscription); //Permt l'envoie des mails //

?>
