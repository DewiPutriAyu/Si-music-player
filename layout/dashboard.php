<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<title>SI Music Player</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/favicon.ico" rel="shortcut icon">
</head>
<body bgcolor="#FFDAB9">
			<div class="header" align="center">
			<center><img src="layout/assets/images/headerku.jpg"></center>
		</div>
	<div class="container" align="center">
		<div class="menu">
			<a href="dashboard.php">Dashboard</a>&nbsp;&nbsp;&nbsp;
			<a href="dashboard.php?page=artist_tampil">Artis</a>&nbsp;&nbsp;&nbsp;
			<a href="dashboard.php?page=album_tampil">Album</a>&nbsp;&nbsp;&nbsp;
			<a href="dashboard.php?page=track_tampil">Lagu</a>&nbsp;&nbsp;&nbsp;
			<a href="dashboard.php?page=user_tampil">User</a>&nbsp;&nbsp;&nbsp;
			<a href="user_logout.php">Logout</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}

			?>

		</div>

		<div class="footer">
				<p align="center">&copy; &nbsp;<font color= #006400>Dewi Putri Ayu Andira</font></p>
		</div>
	</div>
</body>
</html>