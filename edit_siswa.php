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
			<h2>Ubah Data Siswa</h2>
			<hr>

			<div class="main">

				<!-- AMBIL DATA SISWA YANG INGIN DIUBAH -->
				<?php
				include 'koneksi.php';
				if (isset($_GET['nis'])) {
					$nis = $_GET['nis'];

					$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis = '$nis'");

					$siswa = mysqli_fetch_array($query);
				}
				?>

				<form action="proses_edit_siswa.php?=<?php echo $nis; ?>" method="post">
					<table>
						<tr>
							<td>Nis</td>
							<td><input type="text" name="nis" value="<?php echo $siswa['nis']; ?>" readonly></td>
						</tr>
						<tr>
							<td>Nama Siswa</td>
							<td><input type="text" name="nama_siswa" value="<?php echo $siswa['nama_siswa']; ?>" required></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td>
								<select name="kelas">
									<option disabled>PILIH KELAS</option>
									<option value="X-A" <?php if ($siswa['kelas'] == 'X-A') {
															echo 'selected';
														} ?>>X-A</option>
									<option value="X-B" <?php if ($siswa['kelas'] == 'X-B') {
															echo 'selected';
														} ?>>X-B</option>
									<option value="X-C" <?php if ($siswa['kelas'] == 'X-C') {
															echo 'selected';
														} ?>>X-C</option>
									<option value="XI-A" <?php if ($siswa['kelas'] == 'X-A') {
																echo 'selected';
															} ?>>XI-A</option>
									<option value="XI-B" <?php if ($siswa['kelas'] == 'XI-B') {
																echo 'selected';
															} ?>>XI-B</option>
									<option value="XI-C" <?php if ($siswa['kelas'] == 'XI-C') {
																echo 'selected';
															} ?>>XI-C</option>
									<option value="XII-A" <?php if ($siswa['kelas'] == 'XII-A') {
																echo 'selected';
															} ?>>XII-A</option>
									<option value="XII-B" <?php if ($siswa['kelas'] == 'XII-B') {
																echo 'selected';
															} ?>>XII-B</option>
									<option value="XII-C" <?php if ($siswa['kelas'] == 'XII-C') {
																echo 'selected';
															} ?>>XII-C</option>
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