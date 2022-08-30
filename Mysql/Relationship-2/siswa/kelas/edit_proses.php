<?php
	include_once ("../config/koneksi.php");
	
	$id			= $_POST['id'];
	$guru_id		= $_POST['guru_id'];
	$siswa_id	= $_POST['siswa_id'];
	$nama			= $_POST['nama'];
	
	$query = "UPDATE kelas SET 
			guru_id	= '$guru_id',
			siswa_id	= '$siswa_id',
			nama		= '$nama'
			WHERE id = '$id'
	";
	
	$result = mysqli_query($connect, $query);
	
	if($result){
		header('location:index.php');
	} else {
		echo 'gagal mengedit data';
	}

