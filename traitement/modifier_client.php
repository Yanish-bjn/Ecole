<?php
$modifier = new modifier($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST['tel'], $_POST["mdp"]); //Enregsitrement des données //
$co = new Manager(); // nouvelle classe //
$co->modifier($modifier);
?>
