<?php

	include_once ("../config/koneksi.php");
	
	$id = $_POST['id'];
	
	$query = "DELETE FROM kelas WHERE id = '$id'";
	$result = mysqli_query($connect, $query);
	
	if($result){
		header('location:index.php');
	} else {
		echo 'data gagal di hapus';
	}
