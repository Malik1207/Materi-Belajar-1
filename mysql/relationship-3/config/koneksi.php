<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '12345678';
	$db	= 'db_bank';
	
	$connect = mysqli_connect($host, $user, $pass, $db);
	
	/*if (!$connect->error) {
		die ('Berhasil');
	} else {
		echo "Gagal...";
	}
