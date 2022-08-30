<?php
	include_once ("../config/koneksi.php");

	$nama 	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$nip		= $_POST['nip'];
	
	$query 	= "INSERT INTO guru (nama, alamat, nip) VALUES ('$nama','$alamat','$nip')";
	$insert	= mysqli_query($connect, $query);
	
	if ($insert){
		header('location:index.php');
	} else {
		echo "<script> alert(\"Gagal input data\")</script>";
	}
