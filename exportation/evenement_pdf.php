<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
  </head>
  <body>
<?php
require('../vendor2/autoload.php');
$con=mysqli_connect('localhost','root','','ecole');
$res=mysqli_query($con,"select * from evenement");
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table">';
		$html.='<tr><td>ID</td><td>Nom de l\'evenement</td><td>Nom de la personne</td><td>Date</td><td>Description</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['id'].'</td><td>'.$row['nom_evenement'].'</td><td>'.$row['nom_personne'].'</td><td>'.$row['date'].'</td><td>'.$row['description'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>
</body>
