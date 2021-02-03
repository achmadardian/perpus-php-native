<!-- HAPUS DATA TRANSAKSI PINJAM -->
<?php 
include ("koneksi.php");

$id_pinjam = $_GET['id_pinjam'];

$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_pinjam = '$id_pinjam'");

if($query){
	echo "<script>alert('data berhasil dihapus');
	document.location.href='pinjam.php'</script>\n";
 }else{
 	echo "<script>alert('data tidak Gagal dihapus')";
 }

 ?>
