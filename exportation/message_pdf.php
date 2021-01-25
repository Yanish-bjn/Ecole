<?php
require('../vendor2/autoload.php');
$con=mysqli_connect('localhost','yanish','root','ecole');
// Connexion BDD //
$res=mysqli_query($con,"select * from chat");
//Selection des informations de la table
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table">';
		$html.='<tr><td>ID</td><td>Nom</td><td>Prenom</td><td>Date</td><td>Message</td></tr>';
		// Présentation des données via les collones suivante //
		while($row=mysqli_fetch_assoc($res)){
			// Ajouter les données a chaque colonne //
			$html.='<tr><td>'.$row['id'].'</td><td>'.$row['nom'].'</td><td>'.$row['prenom'].'</td><td>'.$row['date'].'</td><td>'.$row['message'].'</td></tr>';
		}
	$html.='</table>';
}else{
	// Si la connexion a la bdd echoue alors on affiche une erreur //
	$html="Data not found";
}
// Exportation au format .pdf //
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>
