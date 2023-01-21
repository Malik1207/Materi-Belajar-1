<?php

	include 'connection.php';
	
	$id = $_POST['id'];
	
	$query = "DELETE FROM dokter WHERE id = '$id'";
	$result = mysqli_query($koneksi, $query);
	
	if($result){
		header('location: index.php');
	} else {
		echo 'data gagal di hapus';
	}
