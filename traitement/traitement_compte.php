<?php

require('../manager/manager.php');
require('../model/class_compte.php');

$con = new Compte($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], $_POST['mdp'], $_POST['role']);
$manager = new Manager();
$manager->Compte($con);

var_dump($con);

 ?>
