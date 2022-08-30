<?php
	include_once ("../config/koneksi.php");

	$nama 	= $_POST['nama'];
	$nisn		= $_POST['nisn'];
	$alamat	= $_POST['alamat'];
	
	$query 	= "INSERT INTO siswa (nama, nisn, alamat) VALUES ('$nama','$nisn','$alamat')";
	$insert	= mysqli_query($connect, $query);
	
	if ($insert){
		header('location:index.php');
	} else {
		echo "<script> alert(\"Gagal input data\")</script>";
	}
