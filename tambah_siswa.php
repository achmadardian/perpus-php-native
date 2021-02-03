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
				<form action="tambah_siswa.php" method="post">
					<table>
						<tr>
							<td>Nis</td>
							<td><input type="text" name="nis" required></td>
						</tr>
						<tr>
							<td>Nama Siswa</td>
							<td><input type="text" name="nama_siswa" required></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td>
								<select name="kelas">
									<option disabled>PILIH KELAS</option>
									<option value="X-A">X-A</option>
									<option value="X-B">X-B</option>
									<option value="X-C">X-C</option>
									<option value="XI-A">XI-A</option>
									<option value="XI-B">XI-B</option>
									<option value="XI-C">XI-C</option>
									<option value="XII-A">XII-A</option>
									<option value="XII-B">XII-B</option>
									<option value="XII-C">XII-C</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><input type="submit" name="submit"></td>
						</tr>
					</table>
				</form>

				<?php
				include('koneksi.php');

				if (isset($_POST['submit'])) {

					$nis        = $_POST['nis'];
					$nama_siswa = $_POST['nama_siswa'];
					$kelas      = $_POST['kelas'];

					$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis = '$nis'"));

					if ($cek > 0) {
						echo "<script>alert('Gagal ! NIS Siswa Sudah Terdaftar');
			document.location.href='tambah_siswa.php'</script>";
					} else {
						echo "<script>alert('Siswa Berhasil Ditambahkan');
			document.location.href='tambah_siswa.php'</script>";

						$sql = "INSERT INTO siswa (nis, nama_siswa, kelas)
				VALUES ('$nis', '$nama_siswa', '$kelas')";
						$query = mysqli_query($koneksi, $sql);
					}
				}
				?>

</body>

</html>