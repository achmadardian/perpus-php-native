<!DOCTYPE html>
<html>

<head>
	<title>Perpustakaan Sekolah</title>
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
			<h2>Data Buku</h2>
			<hr>

			<div class="main">
				<a href="tambah_buku.php">+Tambah Buku</a>
				<table border="1">
					<thead>
						<tr>
							<th>No</th>
							<th>ID Buku</th>
							<th>Nama Buku</th>
							<th>Pengarang</th>
							<th>Penerbit</th>
							<th>Tahun Terbit</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>

						<!-- AMBIL DATA BUKU -->
						<?php
						include 'koneksi.php';
						$no = 1;
						$sql = "SELECT * FROM buku ORDER BY id_buku DESC";
						$query = mysqli_query($koneksi, $sql);

						while ($buku = mysqli_fetch_array($query)) {
							echo "<tr>";

							echo "<td>" . $no++ . "</td>";
							echo "<td>" . $buku['id_buku'] . "</td>";
							echo "<td>" . $buku['nama_buku'] . "</td>";
							echo "<td>" . $buku['pengarang'] . "</td>";
							echo "<td>" . $buku['penerbit'] . "</td>";
							echo "<td>" . $buku['tahun_terbit'] . "</td>";

							echo "<td>";
							echo "<a href='edit_buku.php?id_buku=" . $buku['id_buku'] . "'><img class='img' width='70px' src='assets/img/ubah.png'> </a>";
							echo "<a href='hapus_buku.php?id_buku=" . $buku['id_buku'] . "'><img class='img' width='75px' src='assets/img/hapus.png'></a>";
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