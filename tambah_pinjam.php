<!DOCTYPE html>
<html>

<head>
	<title>Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="assets/css/perpus.css">
</head>

<body>

	<!-- CEK LOGIN -->
	<?php include("koneksi.php"); ?>
	<?php
	session_start();
	if ($_SESSION['status'] != "login") {
		header("location:beranda_login.php?pesan=belum_login");
	}
	?>
	<!--  -->

	<div class="side">
		<div class="sidebar">
			<h2>Perpustakaan</h2>
			<ul>
				<li><a href="beranda.php"><img class="sd" src="assets/img/home.png"> Beranda</a></li>
				<li><a href="buku.php"><img class="sd" src="assets/img/book2.png"> Buku</a></li>
				<li><a href="siswa.php"><img class="sd" src="assets/img/profile.png"> Siswa</a></li>
				<li><a href="pinjam.php"><img class="sd" src="assets/img/pinjam.png"> Peminjaman</a>
				<li><a href="logout.php"><img class="sd" src="assets/img/logout.png"> Logout</a></li>
			</ul>
		</div>

		<div class="content">
			<div class="header">PERPUSTAKAAN SEKOLAH</div>

			<br>
			<h2>Transaksi Peminjaman Buku</h2>
			<hr>

			<div class="main">
				<form action="proses_pinjam.php" method="post">
					<table>
						<tr>
							<td>Nama Peminjam</td>
							<td>
								<select name="siswa">
									<option disabled selected>Pilih Siswa</option>
									<?php
									include("koneksi.php");

									$sql_a = "SELECT * FROM siswa ORDER BY nis";
									$query_a = mysqli_query($koneksi, $sql_a);

									while ($siswa = mysqli_fetch_array($query_a)) {
									?>
										<option value="<?= $siswa['nis'] ?>"><?= $siswa['nama_siswa'] ?></option>
									<?php
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Nama Buku</td>
							<td>
								<select name="buku">
									<option disabled selected>Pilih Buku</option>
									<?php
									include("koneksi.php");

									$sql_b = "SELECT * FROM buku ORDER BY id_buku";
									$query_b = mysqli_query($koneksi, $sql_b);

									while ($buku = mysqli_fetch_array($query_b)) {
									?>
										<option value="<?= $buku['id_buku'] ?>"><?= $buku['nama_buku'] ?></option>
									<?php
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><input type="submit" name="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>


</body>

</html>