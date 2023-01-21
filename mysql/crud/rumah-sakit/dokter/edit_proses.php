<?php
	include 'connection.php';
	
	$id			= $_POST['id'];
	$nama			= $_POST['nama'];
	$telephone	= $_POST['telephone'];
	$spesialis	= $_POST['spesialis'];
	$alamat		= $_POST['alamat'];
	
	$query = "UPDATE dokter SET 
			nama			= '$nama',
			telephone	= '$telephone',
			spesialis	= '$spesialis',
			alamat		= '$alamat'
			WHERE id		= '$id'
	";
	
	$result = mysqli_query($koneksi, $query);
	
	if($result){
		header('location: index.php');
	} else {
		echo 'gagal mengedit data';
	}

