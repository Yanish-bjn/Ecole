<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v5 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="../emploi/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">


		<!-- STYLE CSS -->
    <link rel="stylesheet" href="../emploi/css/style2.css">
    <link rel="stylesheet" href="../emploi/css/style3.css">
	</head>

  <?php
  //Connexion à la bdd
  try{
    $bdd= new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
  }
  catch (Exception $e){
    die('Erreur:'.$e->getMessage());
  }

  ?>
  <SCRIPT language="JavaScript">

  function cacherDiv2() {
       document.getElementById("erreur").style.display = "none";
  }
  </SCRIPT>

  <?php
  ini_set('display_errors', 'off');
  if($_GET['msg'] == 2) { ?>
    <body onload="setTimeout(cacherDiv2,4000);">
  <div id="erreur" class="erreur">
  <?php echo "Erreur veuillez réessayer";
  }?>
</div>
</body>

	<body>
    <?php
    $id = $_GET['id'];
    // Sélectionne les nom de la table compte en fonction du role //
    $req = $bdd->query("SELECT * FROM emploi where id = '$id' ");
    $donnees= $req->fetchall();

    //Liste déroulante avec le nom de chaque client
    foreach ($donnees as $value) {
      $nom_entreprise  = $value['nom_entreprise'];
      $adresse = $value['adresse'];
      $rue  = $value['rue'];
      $email  = $value['email'];
      $date  = $value['date'];
      $piece  = $value['piece'];
      $id = $value['id'];


    //affiche les valeurs //
    ?>
		<div class="wrapper">
			<div class="inner">
        <form method="POST" action="../manager/modifier_emploi.php" enctype="multipart/form-data">
					<h3>Ajout emploi</h3>
					<div class="form-wrapper">
						<label for="" class="label-input">Nom de l'entreprise</label>
						<input type="text" name="nom_entreprise" <?php echo 'value='.'"'.$value["nom_entreprise"].'"'.''?> class="form-control">
					</div>
          <div class="form-wrapper">
          <p>
      <label class="label-input">Tapez le début d'un nom de ville ou d'un code postal.<br></label>
        <input type="texte"  class="form-control" name="adresse" <?php echo 'value='.'"'.$value["adresse"].'"'.''?> id="ville" placeholder="Entrez un code postal ou une ville" autocomplete="on" size="50" required>
          </p>
    <ul>
      <li class="form-control" data-vicopo="#ville">
        <strong data-vicopo-code-postal class="form-control"></strong>
        <span data-vicopo-ville class="form-control"></span>
      </li>
    </ul>
  </div>
					<div class="form-wrapper">
						<label for="" class="label-input">Rue</label>
						<input type="text" name="rue" <?php echo 'value='.'"'.$value["rue"].'"'.''?> class="form-control">
					</div>
          <div class="form-wrapper">
            <label for="" class="label-input">Email</label>
            <input type="text" name="email"  <?php echo 'value='.'"'.$value["email"].'"'.''?> class="form-control">
          </div>
          <div class="form-wrapper">
            <label for="" class="label-input">Date</label>
            <input type="date" name="date" <?php echo 'value='.'"'.$value["date"].'"'.''?> class="form-control">
          </div>
          <div class="form-wrapper">
            <label for="fileField">Fiche de poste</label>
            <input type="file" name="piece" <?php echo 'value='.'"'.$value["piece"].'"'.''?> class="form-control">
					</div>
          <div class="form-group">
              <input type="hidden" name="id" id="id" placeholder="Id" <?php echo 'value='.'"'.$value["id"].'"'.''?> required/>
          </div>
          <?php
            }
          ?>

<button>
Modifier
</button>
				</form>
				<div class="image-holder">
					<img src="../emploi/images/emploi.png" alt="">
				</div>
			</div>
		</div>

		<script src="../emploi/js/jquery-3.3.1.min.js"></script>
		<script src="../emploi/js/main.js"></script>
    <script src="../inscription/js/main2.js"></script>
    <script src="../inscription/js/api.js"></script>
    <script src="../tableau/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../tableau/vendor/bootstrap/js/popper.js"></script>
    <script src="../Tableau/vendor/bootstrap/js/bootstrap.min.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
