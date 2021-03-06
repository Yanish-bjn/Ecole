<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../connexion/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../connexion/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../connexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="../connexion/css/main.css">
	<link rel="stylesheet" type="text/css" href="../connexion/css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/erreur.css">
<!--===============================================================================================-->
</head>
<body>
	<!--================ Gestion d'erreur affiche un message  =================-->
	<SCRIPT language="JavaScript">
	function cacherDiv2() {
			 document.getElementById("erreur").style.display = "none";
	}

	function cacherDiv4() {
			 document.getElementById("erreur").style.display = "none";
	}

	function cacherDiv() {
			 document.getElementById("reussie").style.display = "none";
	}

	function cacherDiv3() {
			 document.getElementById("reussie").style.display = "none";
	}

	function cacherDiv5() {
			 document.getElementById("reussie").style.display = "none";
	}
	</SCRIPT>

	<?php
	ini_set('display_errors', 'off');
	if($_GET['msg'] == 2) { ?>
		<body onload="setTimeout(cacherDiv2,4000);">
	<div id="erreur" class="erreur">
	<?php echo "Erreur, veuillez réessayer";
	}?>
</div>
</body>

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 4) { ?>
	<body onload="setTimeout(cacherDiv4,4000);">
<div id="erreur" class="erreur">
<?php echo "Erreur, vos deux mots de passes ne sont pas identique";
}?>
</div>
</body>

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 1) { ?>
	<body onload="setTimeout(cacherDiv,4000);">
<div id="reussie" class="message">
<?php echo "inscription réussie";
}?>
</div>
</body>

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 3) { ?>
	<body onload="setTimeout(cacherDiv3,4000);">
<div id="reussie" class="message">
<?php echo "Demande envoyer avec succés";
}?>
</div>
</body>

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 5) { ?>
	<body onload="setTimeout(cacherDiv5,4000);">
<div id="reussie" class="message">
<?php echo "Mot de passe modifier avec succés";
}?>
</div>
</body>
<!--================ Fin de la gestion d'erreur  =================-->


	<div class="limiter">
		<!--================ Début du formulaire  =================-->
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../connexion/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Connexion
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="../manager/connexion.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Entre l'email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="mdp" placeholder="Entrer le mot de passe" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<a href="../index.php" class="txt1">
									Revenir a la page d'accueil
							</a>
							</label>
						</div>

						<div>
							<a href="mot_de_passe.php" class="txt1">
								Mot de passe oublié
							</a>
						</div>
					</div>
					<div class="form-group">
						<button class="login100-form-btn">
							Connexion
							</button>
					</div>
					<button type="button" class="login100-form-btn" onclick="window.location.href='inscription.php'">Inscription</button>

				</form>
			</div>
		</div>
	</div>

	<!--================ Fin du formulaire  =================-->

	<script src="../connexion/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../connexion/vendor/animsition/js/animsition.min.js"></script>
	<script src="../connexion/vendor/bootstrap/js/popper.js"></script>
	<script src="../connexion/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../connexion/vendor/select2/select2.min.js"></script>
	<script src="../connexion/vendor/daterangepicker/moment.min.js"></script>
	<script src="../connexion/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../connexion/vendor/countdowntime/countdowntime.js"></script>
	<script src="../connexion/js/main.js"></script>

</body>
</html>
