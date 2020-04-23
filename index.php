<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

	require_once 'includes/config.php';

	$pt = new PostTable();
	if (isset($_POST['title']) && isset($_POST['content'])) {
			$post = new Post();
			$post->setTitle($_POST['title']);
			$post->setContent($_POST['content']);
			$pt->create($post);
			header('location: ../index.php');
	}

	$pt = new PostTable();
	if(!empty(($_GET['id']))){
	    $getid = intval($_GET['id']);
	    $pt->delete($getid);
	    header('location:index.php');
	}

	$posts = $pt->all();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>MSG</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">
	<link href="navbar.css" rel="stylesheet">

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
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>

<!---------------------------------------------------------------------------->
<!-- logged in user information -->

<nav class="navbar navbar-dark bg-dark">
	<a></a>
	<button class="navbar-toggler" type="button">
		<?php  if (isset($_SESSION['username'])) : ?>
			<p> <a href="index.php?logout='1'" style="color: white;">Déconnexion</a> </p>
		<?php endif ?>
	</button>
</nav>

<!---------------------------------------------------------------------------->
<div class="container"><div class="row"></div>

<!-- Page Content -->
<div class="container"><br>
	<div class="col-lg-8">
  	<div class="card my-4">
    	<div class="card-header">
				<h5>
					<?php
              session_start();
              if($_SESSION['username'] !== ""){
                  $user = $_SESSION['username'];
                  // afficher un message
                  echo "Bonjour, $user";
              }
          ?>
				</h5>
			</div>

			<? foreach($posts as $post): ?>
							<h2><?= $post['title'] ?></h2>
							<p><?= $post['content'] ?></p>
			<? endforeach; ?>
			<form method="POST" action="">
				<label for="title">Title</label><input type="text" class="form-control" name="title">
				<div class="form-group">
					<label for="title">Content</label><textarea class="form-control" name="content"></textarea>
				</div>
				<input type="submit" class="btn btn-primary">
			</form>
    </div>
  </div>
</div>
<hr>

<!---------------------------------------------------------------------------->
<!-- Message -->

<?php foreach($posts as $post): ?>
	<div class="row">
  	<div class="col-md-10">
			<div class="media media-chat"> <img class="d-flex mr-3 rounded-circle" width="50" height="50" src="images/profil.png">
				<div class="col-md-1">
					<?php session_start();if($_SESSION['username'] !== ""){$user = $_SESSION['username'];echo "$user : ";}?>
						<p class="meta"><time datetime="2018">23:58</time></p>
						</div>
							<div class="col-md-10">
						<div class="media-body">
						<p><?=$post['content']?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<hr>
<?php endforeach; ?>

<!---------------------------------------------------------------------------->



<script src="js/app.js"></script>
<script src="js/script.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>
