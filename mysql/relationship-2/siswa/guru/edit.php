<?php
	include_once ("../config/koneksi.php");
	
	$id = $_GET['id'];
	
	$query = "SELECT * FROM guru WHERE id = '$id'";
	
	$result = mysqli_query($connect, $query);
	
	$data = mysqli_fetch_assoc($result);
?>

<h2>Edit data Guru</h2>

<br>

<form action="edit_proses.php" method="POST">

	<input type="hidden" name="id" value="<?= $data['id']?>">

	<label>Nama</label><br>
	<input type="text" name="nama" value="<?= $data['nama']?>">
	<br><br>
	
	<label>Alamat</label><br>
	<Textarea name="alamat" value="<?= $data['alamat']?>"></Textarea>
	<br><br>
	
	<label>Nip</label><br>
	<input type="nip" name="nip" value="<?= $data['nip']?>">
	<br><br>
	
	<button>Buat Data</button>
</form>
