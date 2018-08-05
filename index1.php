<?php
require_once_DIR_.'/vendor/authload.php';

session_start();
if (isset($_SESSION['access_token']) && $_SESSION['access_token']){
	$profile = $_SESSION['access_profile'];
	echo "<img scr=\"{profile['image']['url']}\">";
	echo "<h3>Hai, {$profile['displayName']['url']}\">";
	echo "Anda Telah Berhasil login menggunakan akun google anda, klik <a href='logout.php'>Logout</a> untuk keluar.";
	}else{
		echo "<a href='auth.php'>Login Dengan Akun Google</a>";
	}