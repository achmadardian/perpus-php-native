	<?php 
	include "koneksi.php";
	if (isset($_POST['submit'])) {
		$id_buku = $_POST['id_buku'];
		$nama_buku = $_POST['nama_buku'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$tahun_terbit = $_POST['tahun_terbit'];

		$sql = mysqli_query($koneksi, "UPDATE buku SET nama_buku = '$nama_buku', pengarang = '$pengarang', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit' WHERE id_buku = '$id_buku'");

		if ($sql) {
			echo "<script>alert('Ubah Data Buku Berhasil');
			document.location.href='buku.php'</script>\n";
		}else{
			echo "<script>alert('Ubah Data Buku Gagal');
			document.location.href='buku.php'</script>\n";
		}
	}
	 ?>