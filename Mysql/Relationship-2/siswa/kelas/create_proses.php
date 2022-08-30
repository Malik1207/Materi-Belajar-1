<?php
	include_once ("../config/koneksi.php");

	$guru_id 	= $_POST['guru_id'];
	$siswa_id	= $_POST['siswa_id'];
	$nama			= $_POST['nama'];
	
	$query 	= "INSERT INTO kelas (guru_id, siswa_id, nama) VALUES ('$guru_id','$siswa_id','$nama')";
	$insert	= mysqli_query($connect, $query);
	
	if ($insert){
		header('location:index.php');
	} else {
		echo "<script> alert(\"Gagal input data\")</script>";
	}
