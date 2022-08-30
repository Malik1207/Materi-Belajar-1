<?php
	include 'connection.php';
	
	$id = $_GET['id'];
	
	$query = "SELECT * FROM dokter WHERE id = '$id'";
	
	$result = mysqli_query($koneksi, $query);
	
	$data = mysqli_fetch_assoc($result);
?>

<h2>Edit data Dokter</h2>

<br>

<form action="edit_proses.php" method="POST">

	<input type="hidden" name="id" value="<?= $data['id']?>">

	<label>Nama</label><br>
	<input type="text" name="nama" value="<?= $data['nama']?>">
	<br><br>
	
	<label>Telephone</label><br>
	<input type="text" name="telephone" value="<?= $data['telephone']?>">
	<br><br>
	
	<label>Spesialis</label><br>
	<input type="text" name="spesialis" value="<?= $data['spesialis']?>">
	<br><br>
	
	<label>Alamat</label><br>
	<input type="text" name="alamat" value="<?= $data['alamat']?>">
	<br><br>
	
	<button>Buat Data</button>
</form>
