<?php

require('../manager/manager.php');
require('../model/class_contact.php');

$con = new Contact($_POST['msg'], $_POST['nom'], $_POST['prenom']);
$manager = new Manager();
$manager->Contact($con);

var_dump($con);

 ?>
