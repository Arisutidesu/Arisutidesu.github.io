<?php
session_start();

if(empty($_SESSION['login'])){
	header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Berhasil Login</title>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4  mt-5">

				<div class="alert alert-success" role="alert">
				  Berhasil login ke dalam sistem.
				</div>

				<div class="card">
					<div class="card-title text-center">
						<h1>Selamat Datang</h1>
					</div>
					<div class="card-body">
						<p>Halo, <?php echo $_SESSION['username']?> </p>
						<p>Selamat kamu menjadi pembajak handal</p>
						<center>
							<a href="logout.php">Logout</a>
							<a href="html/index.html">Profil</a>
						</center>
					</div>
				</div>
			</div>

		</div>

	</div>
</body>
</html>