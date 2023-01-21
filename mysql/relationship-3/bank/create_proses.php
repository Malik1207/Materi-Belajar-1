<?php
	include_once ('../config/koneksi.php');

	$nama = $_POST['name'];
	$code = $_POST['code'];
	
	$query = "INSERT INTO bank (name, code) VALUES ('$nama','$code')";
	
	$insert = mysqli_query($connect, $query);
	
	if ($insert) {
		header ('location:index.php');
	} else {
		echo 'Data gagal ditambahkan...';
	}
?>
