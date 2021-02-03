<!DOCTYPE html>
<html>

<head>
	<title>Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="assets/css/perpus.css">
</head>

<body class="beranda_login">

	<?php include 'koneksi.php'; ?>

	<!-- Cek Login -->
	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo '<script>alert("Login Gagal ! username atau password salah")</script>';
		} else if ($_GET['pesan'] == "logout") {
			echo '<script>alert("Berhasil Logout.")</script>';
		} else if ($_GET['pesan'] == "belum_login") {
			echo '<script>alert("Anda harus login untuk masuk !")</script>';
		} else if ($_GET['pesan'] == "login") {
			echo '<script>alert("Berhasil Login")</script>';
		} else {
		}
	}
	?>
	<!--  -->

	<br><br>

	<div class="container">
		<div class="kotak_login">
			<p class="tulisan_login">Admin Login</p>

			<form action="login.php" method="post">
				<label>Username</label>
				<input type="text" name="username" class="form_login" placeholder="username" required>

				<label>Password</label>
				<input type="password" name="password" class="form_login" placeholder="password" required>

				<input type="submit" class="tombol_login" value="LOGIN">
			</form>
		</div>
	</div>

</body>

</html>