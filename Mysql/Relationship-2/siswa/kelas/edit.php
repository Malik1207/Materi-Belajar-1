<?php
	include_once ("../config/koneksi.php");
	
	$id		= $_GET['id'];
	
	$query	= "SELECT * FROM kelas WHERE id = '$id'";
	
	$result	= mysqli_query($connect, $query);
	
	$data		= mysqli_fetch_assoc($result);
?>

<h2>Edit data Kelas</h2>

<br>

<form action="edit_proses.php" method="POST">

	<input type="hidden" name="id" value="<?= $data['id']?>">

	<label>Guru Id</label><br>
	<input type="text" name="guru_id" value="<?= $data['guru_id']?>">
	<br><br>
	
	<label>Siswa Id</label><br>
	<input type="text" name="siswa_id" value="<?= $data['siswa_id']?>">
	<br><br>
	
	<label>Nama</label><br>
	<input type="text" name="nama" value="<?= $data['nama']?>">
	<br><br>
	
	<button>Buat Data</button>
</form>
