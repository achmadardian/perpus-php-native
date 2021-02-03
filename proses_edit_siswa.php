	<?php 
	include "koneksi.php";
	if (isset($_POST['submit'])) {
		$nis = $_POST['nis'];
		$nama_siswa = $_POST['nama_siswa'];
		$kelas = $_POST['kelas'];

		$sql = mysqli_query($koneksi, "UPDATE siswa SET nama_siswa = '$nama_siswa', kelas = '$kelas' WHERE nis = '$nis'");

		if ($sql) {
			echo "<script>alert('Ubah Data Siswa Berhasil');
			document.location.href='siswa.php'</script>\n";
		}else{
			echo "<script>alert('Ubah Data Siswa Gagal');
			document.location.href='siswa.php'</script>\n";
		}
	}
	 ?>