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
			<h2>Transaksi Peminjaman</h2>
			<hr>

			<div class="main">
				<a href="tambah_pinjam.php">+Tambah Transaksi Peminjaman Buku</a>

				<h3>Buku Yang Sedang Dipinjam</h3>
				<br>
				<table border="1">
					<thead>
						<tr>
							<th>No</th>
							<th>ID Pinjam</th>
							<th>Tanggal Pinjam Buku</th>
							<th>Nama Peminjam</th>
							<th>Nama Buku</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>

						<!-- AMBIL DATA SISWA YANG BELUM MENGEMBALIKKAN BUKU -->
						<?php
						include("koneksi.php");
						$no = 1;
						$sql = "SELECT * FROM peminjaman, siswa, buku WHERE peminjaman.nis = siswa.nis AND peminjaman.id_buku = buku.id_buku AND peminjaman.kembali = 1 ORDER BY id_pinjam DESC";
						$query = mysqli_query($koneksi, $sql);

						while ($pinjam = mysqli_fetch_array($query)) {
							echo "<tr>";

							echo "<td>" . $no++ . "</td>";
							echo "<td>" . $pinjam['id_pinjam'] . "</td>";
							echo "<td>" . $pinjam['tgl_pinjam'] . "</td>";
							echo "<td>" . $pinjam['nama_siswa'] . "</td>";
							echo "<td>" . $pinjam['nama_buku'] . "</td>";

							echo "<td>";
							echo "<a href='proses_kembali.php?id_pinjam=" . $pinjam['id_pinjam'] . "'><img class='img' width='115px' src='assets/img/kembalikan.png'></a>";
							echo "</td>";

							echo "</tr>";
						}

						?>

					</tbody>
				</table>

				<br>
				<br>

				<h3>Buku Yang Sudah Dikembalikan</h3>
				<br>
				<table border="1">
					<thead>
						<tr>
							<th>No</th>
							<th>ID Pinjam</th>
							<th>Tanggal Pinjam </th>
							<th>Tanggal Kembali</th>
							<th>Nama Peminjam</th>
							<th>Nama Buku</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>

						<!-- AMBIL DATA SISWA YANG SUDAH MENGEMBALIKKAN BUKU -->
						<?php
						include("koneksi.php");
						$no = 1;
						$sql = "SELECT * FROM peminjaman, siswa, buku WHERE peminjaman.nis = siswa.nis AND peminjaman.id_buku = buku.id_buku AND peminjaman.kembali = 2 ORDER BY id_pinjam DESC";
						$query = mysqli_query($koneksi, $sql);

						while ($pinjam = mysqli_fetch_array($query)) {
							echo "<tr>";

							echo "<td>" . $no++ . "</td>";
							echo "<td>" . $pinjam['id_pinjam'] . "</td>";
							echo "<td>" . $pinjam['tgl_pinjam'] . "</td>";
							echo "<td>" . $pinjam['tgl_kembali'] . "</td>";
							echo "<td>" . $pinjam['nama_siswa'] . "</td>";
							echo "<td>" . $pinjam['nama_buku'] . "</td>";

							echo "<td>";
							echo "<a href='hapus_pinjam.php?id_pinjam=" . $pinjam['id_pinjam'] . "'>
							<img class='img' width='75px' src='assets/img/hapus.png'>
							</a>";
							echo "</td>";
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