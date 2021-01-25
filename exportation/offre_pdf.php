<?php
require('../vendor2/autoload.php');
$con=mysqli_connect('localhost','yanish','root','ecole');
$res=mysqli_query($con,"select * from emploi");
//Selection des informations de la table
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table">';
	// Présentation des données via les collones suivante //
		$html.='<tr><td>ID</td><td>Nom de l\'entreprise</td><td>Adresse</td><td>Rue</td><td>Email</td><td>Date</td><td>Piece jointe</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			// Ajouter les données a chaque colonne //
			$html.='<tr><td>'.$row['id'].'</td><td>'.$row['nom_entreprise'].'</td><td>'.$row['adresse'].'</td><td>'.$row['rue'].'</td><td>'.$row['email'].'</td><td>'.$row['date'].'</td><td>'.$row['piece'].'</td></tr>';
		}
		// Si la connexion a la bdd echoue alors on affiche une erreur //
	$html.='</table>';
}else{
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
