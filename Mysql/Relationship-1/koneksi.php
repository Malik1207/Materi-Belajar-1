<?php

	$server = 'localhost';
	$user = 'root';
	$pass = '12345678';
	$db = 'market';
	
	$koneksi = mysqli_connect($server, $user, $pass, $db);
	
	/*if ($koneksi) {
		echo 'Berhasil';
	} else {
		echo 'Gagal';
	}*/
