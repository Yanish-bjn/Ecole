<?php
$messagerie = new messagerie($_POST['date'], $_POST['message']); //enregistrement des données //
$me = new Manager(); // nouvelles classe  //
$me->messagerie($messagerie);

?>
