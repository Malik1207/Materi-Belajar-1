<?php
	include_once ("../config/koneksi.php");
	
	$id 			= $_POST['id'];
	$nama			= $_POST['nama'];
	$nisn 		= $_POST['nisn'];
	$alamat		= $_POST['alamat'];
	
	$query = "UPDATE siswa SET 
			nama 		= '$nama',
			nisn 		= '$nisn',
			alamat 	= '$alamat'
			WHERE id = '$id'
	";
	
	$result = mysqli_query($connect, $query);
	
	if($result){
		header('location:index.php');
	} else {
		echo 'gagal mengedit data';
	}

