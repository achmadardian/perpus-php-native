<?php

$koneksi = mysqli_connect("localhost", "root", "", "perpus_php_native");

if (!$koneksi) {
	echo "Koneksi Database Gagal";
}
