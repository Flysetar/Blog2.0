<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="login.php">
					<span class="login100-form-title p-b-43">Se connecter</span>

						<?php include('errors.php'); ?>

						<div class="wrap-input100 validate-input">
							<input type="text" id="defaultSubscriptionFormPassword" class="input100" placeholder="Entrer votre prénom" name="username" >
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input">
							<input type="password" id="defaultSubscriptionFormEmail" class="input100" placeholder="Entrer votre Mot de passe" name="password">
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn">
							<button type="submit" class="login100-form-btn" name="login_user">Connexion</button>
						</div><br>
						<p>
							Vous êtes pas encore membre ? <a href="register.php">S'enregistrer</a>
						</p>
					</form>

				<div class="login100-more" style="background-image: url('images/bg-02.jpg');">
			</div>
		</div>
	</div>
</div>


























	<!--
		<form method="post" action="login.php">

			>?php include('errors.php'); ?>

			<div class="input-group">
				<label>Nom et Prénom</label>
				<input type="text" placeholder="Entrer votre prénom" name="username" >
			</div>
			<div class="input-group">
				<label>Mot de Passe</label>
				<input type="password" placeholder="Entrer votre Mot de passe" name="password">
			</div>
			<br>
			<div class="input-group">
				<button type="submit" class="login100-form-btn" name="login_user">Connexion</button>
			</div>
			<br>
			<p>
				Vous êtes pas encore membre ? <a href="register.php">S'enregistrer</a>
			</p>
		</form>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

</body>
</html>
