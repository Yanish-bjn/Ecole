<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajouter une offre</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style de la page -->
    <link rel="stylesheet" href="../evenement/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../tableau/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="../evenement/css/style.css">
    <link rel="stylesheet" href="../evenement/css/style2.css">
    <link rel="stylesheet" href="../css/erreur.css">
	</head>

	<body>

<div class="main">

    <!-- Affichage du formulaire de la page -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Offre emploi</h2>
                    <form method="POST" action="../manager/ajouter_emploi.php" enctype="multipart/form-data" class="register-form" id="register-form">
                        <div class="form-group">
                          <label for="Nom de l'entreprise"><i class="fa fa-vcard-o"></i></label>
                            <input type="text" name="nom_entreprise" id="name" placeholder="Nom de l'entreprise" required/>
                        </div>
                        <div class="form-group">
                        <p>
                      <input type="texte"  class="form-group" name="adresse" id="ville" placeholder="Entrez un code postal" autocomplete="on" size="50" required>
                        </p>
                  <ul>
                    <li class="form-group" data-vicopo="#ville">
                      <strong data-vicopo-code-postal class="form-group"></strong>
                      <span data-vicopo-ville class="form-group"></span>
                    </li>
                  </ul>
                </div>
                        <div class="form-group">
                            <label for="Rue"><i class="	fa fa-location-arrow"></i></label>
                            <input type="text" name="rue" id="name" placeholder="Rue" required/>
                        </div>
                        <div class="form-group">
                            <label for="description"><i class="fa fa-envelope"></i></label>
                            <input type="text" name="email" id="Email" placeholder="Email" required/>
                        </div>
												<div class="form-group">
                          <label for="Fiche de poste"><i class="fa fa-share-square-o"></i></label>
                          <input type="file" name="piece" placeholder="Fiche de poste" accept="application/msword, application/pdf">
                        </div>
				                  <div class="form-group">
				                    <center><input  style="display:none" readonly="readonly" type="text" value=" <?php
				                   date_default_timezone_set('Europe/Paris');
				                   echo date('d-m-Y H:i:s'). '';
				               ?>" class="form-control" id="datetime" name="date" />
				                  </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="btn btn-warning" value="Enregistrer"/>
                        </div>
                        <div class="form-group form-button">
                        <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='offre_emploi.php'">Retour</button>
                      </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="../emploi/images/emploi.png" alt="sing up image"></figure>
                </div>
            </div>
        </div>
    </section>
		<!--================ Fin du formulaire  =================-->
</div>

<!-- Liens JS de la page-->
<script src="../evenement/vendor/jquery/jquery.min.js"></script>
<script src="../evenement/js/main.js"></script>
<script src="../inscription/js/main2.js"></script>
<script src="../inscription/js/api.js"></script>
<script src="../inscription/js/main.js"></script>
</body>
</html>
