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
			<h2>Penambahan Buku</h2>
			<hr>

			<div class="main">
				<form action="tambah_buku.php" method="post">
					<table>
						<tr>
							<td>ID Buku</td>
							<td><input type="text" name="id_buku" required></td>
						</tr>
						<tr>
							<td>Nama Buku</td>
							<td><input type="text" name="nama_buku" required></td>
						</tr>
						<tr>
							<td>Pengarang</td>
							<td><input type="text" name="pengarang" required></td>
						</tr>
						<tr>
							<td>Penerbit</td>
							<td><input type="text" name="penerbit" required></td>
						</tr>
						<tr>
							<td>Tahun Terbit</td>
							<td><input type="text" name="tahun_terbit" required></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" required></td>
						</tr>
					</table>
				</form>

				<?php
				include 'koneksi.php';
				if (isset($_POST['submit'])) {

					$id_buku = $_POST['id_buku'];
					$nama_buku = $_POST['nama_buku'];
					$pengarang = $_POST['pengarang'];
					$penerbit = $_POST['penerbit'];
					$tahun_terbit = $_POST['tahun_terbit'];

					$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id_buku'"));

					if ($cek > 0) {
						echo "<script>alert('Gagal ! ID Buku Sudah Terdaftar');
			document.location.href='tambah_buku.php'</script>";
					} else {
						echo "<script>alert('Buku Berhasil Ditambahkan');
			document.location.href='tambah_buku.php'</script>";

						$sql = "INSERT INTO buku (id_buku, nama_buku, pengarang, penerbit, tahun_terbit)
				VALUES ('$id_buku', '$nama_buku', '$pengarang', '$penerbit', '$tahun_terbit')";
						$query = mysqli_query($koneksi, $sql);
					}
				}
				?>
			</div>
		</div>
	</div>

</body>

</html>