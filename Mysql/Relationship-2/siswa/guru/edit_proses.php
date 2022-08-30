<?php
	include_once ("../config/koneksi.php");
	
	$id 			= $_POST['id'];
	$nama			= $_POST['nama'];
	$alamat 		= $_POST['alamat'];
	$nip			= $_POST['nip'];
	
	$query = "UPDATE guru SET 
			nama 		= '$nama',
			alamat 	= '$alamat',
			nip	 	= '$nip'
			WHERE id = '$id'
	";
	
	$result = mysqli_query($connect, $query);
	
	if($result){
		header('location:index.php');
	} else {
		echo 'gagal mengedit data';
	}

