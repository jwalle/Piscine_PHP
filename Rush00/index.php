<?php
session_start();
include "./install.php";
 ?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="chupa.css">
		<link rel="icon" type="image/png" href="/img/logo.png">
		<title>Chupa Chups !</title>
	</head>
	<body bgcolor="#A69256">

<div class ="general">
	
	<header class="box">
		<img id="logo" src="/img/logo.png"></img>
		<img id="chupa-title" src="/img/chupa.png">
 		<?php if ($_SESSION['login']) ?> <p id ="bienvenue">	<?php echo "Bienvenue Connard" ?> </p>
		<?php /*if ($_SESSION['login'])*/ include "./form_login.php"; ?>
			<div class="buttons">
				<form method="POST" action=''>
					<input type="submit" name="button2" value="Acceuil" class="button">
					<input type="submit" name="button1" value="Boutique" class="button">
					<a href="#" class="button"/>Panier</a>
					<!-- <a href="#" class="button"/>Login</a> -->
				</form>
			</div>

	</header>
			<div class="container">
			<?php	
					if (isset($_POST['button1'])) include "./store.php";
					if (isset($_POST['button2'])) include "./accueil.php"; 
					else include "./accueil.php"; ?>
			</div>
	
</div>

</body>
</html>


<!-- <a <head></head>ref="phpinfo.php">PHP info</a></body></html> -->
