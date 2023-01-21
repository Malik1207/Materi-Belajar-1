<?php

	$server  = 'localhost'; //nama server 
	$user    = 'root'; //nama user
	$pass    = '12345678'; //password
	$db 	   = 'rumahsakit'; //nama database
	
	$koneksi = mysqli_connect($server, $user, $pass, $db);
	
	/*if ($koneksi) {
		echo 'berhasil';
	}else {
		echo 'gagal';
	}*/
