<?php
	include 'connection.php';
	
	$nama			= $_POST['nama'];
	$telephone	= $_POST['telephone'];
	$spesialis	= $_POST['spesialis'];
	$alamat		= $_POST['alamat'];
	
	$query	= "INSERT INTO dokter (nama, telephone, spesialis, alamat) values ('$nama', '$telephone', 	'$spesialis', 	'$alamat')";
	
	$result	= mysqli_query($koneksi, $query);
	
	if($result) {
		header('location:index.php');
	} else{
		echo 'data gagal ditambahkan';
	}
