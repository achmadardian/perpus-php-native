<!-- HAPUS DATA BUKU -->
<?php 
include ("koneksi.php");

$id_buku = $_GET['id_buku'];

$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id_buku'");

if($query){
	echo "<script>alert('Buku berhasil dihapus');
	document.location.href='buku.php'</script>\n";
 }else{
 	echo "<script>alert('Buku Gagal dihapus')";
 }

 ?>