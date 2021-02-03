<!-- HAPUS DATA SISWA -->
<?php 
include ("koneksi.php");

$nis = $_GET['nis'];

$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE nis = '$nis'");

if($query){
	echo "<script>alert('data Siswa berhasil dihapus');
	document.location.href='siswa.php'</script>\n";
 }else{
 	echo "<script>alert('data tidak Gagal dihapus')";
 }

 ?>