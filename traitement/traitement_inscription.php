<?php

require('../manager/manager.php');
require('../model/class_inscription.php');

$ins = new Inscription($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['mdp']);
$manager = new Manager();
$manager->Inscription($ins);

var_dump($ins);

 ?>
