<?php
$inscription = new inscription($_POST["nom"], $_POST["prenom"], $_POST['email'], $_POST['ville'], $_POST['tel'], $_POST['mdp']); //enregistrement des données //
$inscrit = new Manager(); // nouvelles classe  //
$inscrit->inscription($inscription); // Permet l'insertion dans la base de données //

?>
