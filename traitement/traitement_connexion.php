<?php

require('../manager/manager.php');
require('../model/class_connexion.php');

$user = new Connexion($_POST['nom'], $_POST['mdp']);
$manager = new Manager();
$manager->connexion($user);

?>
