<!DOCTYPE html>
<html>
<head>
	<title>Music Player</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/favicon.ico" >
</head>
<body bgcolor="#FFDAB9">
	<div class="container" align="center">
		<div class="header">
			<center><img src="layout/assets/images/headerku.jpg"></center>
		</div>

		<div class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=index_album">Album</a>
			<a href="index.php?page=index_login">Login</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div class="footer">
			<p align="center">&copy; &nbsp;<font color= #006400>Dewi Putri Ayu Andira</font></p>
		</div>
	</div>
</body>
</html>