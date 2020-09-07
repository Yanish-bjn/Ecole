<?php

require('../manager/manager.php');
require('../model/class_contact.php');

$con = new Contact($_POST['nom'], $_POST['email'], $_POST['sujet'], $_POST['message']);
$manager = new Manager();
$manager->Contact($con);

var_dump($con);

 ?>
