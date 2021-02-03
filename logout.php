<?php 
session_start();

session_destroy();

header("location:beranda_login.php?pesan=logout");
 ?>