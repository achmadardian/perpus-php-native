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
			<h2>Data Siswa</h2>
			<hr>

			<div class="main">
				<a href="tambah_siswa.php">+Tambah Siswa</a>

				<table border="1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nis</th>
							<th>Nama Siswa</th>
							<th>Kelas</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>

						<!-- AMBIL DATA SISWA -->
						<?php
						include("koneksi.php");
						$no = 1;
						$sql = "SELECT * FROM siswa ORDER BY nis DESC";
						$query = mysqli_query($koneksi, $sql);

						while ($siswa = mysqli_fetch_array($query)) {
							echo "<tr>";

							echo "<td>" . $no++ . "</td>";
							echo "<td>" . $siswa['nis'] . "</td>";
							echo "<td>" . $siswa['nama_siswa'] . "</td>";
							echo "<td>" . $siswa['kelas'] . "</td>";

							echo "<td>";
							echo "<a href='edit_siswa.php?nis=" . $siswa['nis'] . "'><img class='img' width='70px' src='assets/img/ubah.png'> </a>";
							echo "<a href='hapus_siswa.php?nis=" . $siswa['nis'] . "'><img class='img' width='75px' src='assets/img/hapus.png'></a>";
							echo "</td>";

							echo "</tr>";
						}
						?>

					</tbody>
				</table>

			</div>
		</div>
	</div>

</body>

</html>