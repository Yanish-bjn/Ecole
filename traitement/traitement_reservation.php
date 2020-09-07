<?php

require('../manager/manager.php');
require('../model/class_reservation.php');

$res = new reservation($_POST['nom'], $_POST['date'], $_POST['heur'], $_POST['film']);
$manager = new Manager();
$manager->Reservation($res);

var_dump($res);

 ?>
