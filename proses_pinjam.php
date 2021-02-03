<?php
	include ('koneksi.php');

	$siswa = $_POST['siswa'];
	$buku = $_POST['buku'];
	
		$query = mysqli_query($koneksi, 'insert into peminjaman(tgl_pinjam, tgl_kembali, kembali, nis, id_buku) values ("'.date('Y-m-d').'", "'.date('Y-m-d').'", 1 , "'.$siswa.'","'.$buku.'")');
		if ($query) {
			echo "<script>alert('Berhasil Melakukan Peminjaman');
			document.location.href='tambah_pinjam.php'</script>";
		}

		else
		{
			echo '<script>alert("Peminjam Sedang Melakukan Peminjaman."); document.location="pinjam.php";</script>';
		}
?>