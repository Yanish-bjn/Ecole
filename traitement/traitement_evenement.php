<?php

require('../manager/manager.php');
require('../model/class_evenement.php');

$eve = new Evenement($_POST['nom'], $_POST['date'], $_POST['heure']);
$manager = new Manager();
$manager->Evenement($eve);

var_dump($eve);

 ?>
