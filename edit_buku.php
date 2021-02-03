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
			<h2>Edit Buku</h2>
			<hr>

			<!-- AMBIL DATA BUKU YANG INGIN DIUBAH -->
			<?php
			include 'koneksi.php';
			if (isset($_GET['id_buku'])) {
				$id_buku = $_GET['id_buku'];

				$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id_buku'");

				$buku = mysqli_fetch_assoc($query);
			}
			?>

			<div class="main">
				<form action="proses_edit_buku.php?=<?php echo $id_buku; ?>" method="post">
					<table class="edit_buku">
						<tr>
							<td>Id Buku</td>
							<td><input type="text" name="id_buku" value="<?php echo $buku['id_buku']; ?>" readonly></td>
						</tr>
						<tr>
							<td>Nama Buku</td>
							<td><input type="text" name="nama_buku" value="<?php echo $buku['nama_buku']; ?>" required></td>
						</tr>
						<tr>
							<td>Pengarang</td>
							<td><input type="text" name="pengarang" value="<?php echo $buku['pengarang']; ?>" required></td>
						</tr>
						<tr>
							<td>Penerbit</td>
							<td><input type="text" name="penerbit" value="<?php echo $buku['penerbit']; ?>" required></td>
						</tr>
						<tr>
							<td>Tahun Terbit</td>
							<td><input type="text" name="tahun_terbit" value="<?php echo $buku['tahun_terbit']; ?>" required></td>
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