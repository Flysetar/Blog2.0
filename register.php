<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>S'enregistrer</title>
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
				<div class="login100-more" style="background-image: url('images/bg-03.jpg');"></div>

				<form class="login100-form validate-form" method="post" action="register.php">
					<span class="login100-form-title p-b-43">S'enregistrer</span>

						<?php include('errors.php'); ?>

						<div class="wrap-input100 validate-input">
							<input type="text" id="defaultSubscriptionFormPassword" class="input100" placeholder="Entrer votre Prénom"name="username" value="<?php echo $username; ?>">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input">
							<input type="email" id="defaultSubscriptionFormEmail" class="input100" placeholder="Entrer votre Email"name="email" value="<?php echo $email; ?>">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input">
							<input type="password" id="defaultSubscriptionFormEmail" class="input100" placeholder="Entrer votre mot de passe"name="password_1">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input">
							<input type="password" id="defaultSubscriptionFormEmail" class="input100" placeholder="Confirmer votre mot de passe"name="password_2">
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn">
							<button type="submit" class="login100-form-btn" name="reg_user">s'enregistrer</button>
						</div><br>
						<p>
							Déja membre ? <a href="login.php">Connexion</a>
					 </form>
		</div>
	</div>
</div>











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



<!-- 	<form method="post" action="register.php">

		>?php include('errors.php'); ?>

		<div class="form">
		<div class="input-group">
			<label>Nom et Prénom</label>
			<input type="text" placeholder="Entrer votre Prénom"name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" placeholder="Entrer votre Email"name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Mot de passe</label>
			<input type="password" placeholder="Entrer votre mot de passe"name="password_1">
		</div>
		<div class="input-group">
			<label>Confirmer Mot de passe</label>
			<input type="password" placeholder="Confirmer votre mot de passe"name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="login100-form-btn" name="reg_user">s'enregistrer</button>
		</div>
		<br>
		<p>
			Déja membre ? <a href="login.php">Connexion</a>
		</p>
	</form>

-->
