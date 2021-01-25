<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../connexion/images/icons/favicon.ico"/>
	<!--================ Liens contenant le style de la page  =================-->
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../connexion/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../connexion/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../connexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="../connexion/css/main.css">
	<link rel="stylesheet" type="text/css" href="../connexion/css/style.css">
</head>
<body>

	<!--================ Début du formulaire =================-->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../connexion/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Mot de passe oublié
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="../manager/mot_de_passe2.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="mdp" placeholder="Entrer votre nouveau mot de passe" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="mdp_confirmer" placeholder="Confirmer votre mot de passe" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" style="display: none">
						<input class="input100" type="texte" name="code" readonly="readonly" style="display: none" value="<?php echo $_GET['code']; ?>"placeholder="Entrer le mot de passe">
					</div>
					<div class="flex-sb-m w-full p-b-30">
					<div class="form-group">
						<button class="login100-form-btn">
							Valider
							</button>
					</div>
					</button>

				</form>
			</div>
		</div>
	</div>
	<!--================ Fin du formulaire =================-->

	<!--================ Liens contetant le script de la page =================-->
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
