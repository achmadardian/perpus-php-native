<?php 
include 'koneksi.php';

$tgl_kembali = date('Y-m-d');

$query = mysqli_query($koneksi, "UPDATE peminjaman SET tgl_kembali = '$tgl_kembali', kembali = 2 WHERE id_pinjam = '$_GET[id_pinjam]'");

if ($query) {
echo "<script>alert('Buku Sudah Dikembalikan');
document.location.href='pinjam.php'</script>\n";
} else {
echo "<script>alert('gagal');
document.location.href='pinjam.php'</script>\n";
}
 ?>