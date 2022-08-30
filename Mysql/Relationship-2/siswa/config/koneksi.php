<?php
	
	$host 	 	= 'localhost';
	$username 	= 'root';
	$pass 		= '12345678';
	$db 			= 'db_siswa';
	
	$connect 	= mysqli_connect($host, $username, $pass, $db);
	
	if ($connect->error) {
		die('failed to connect');
	}
