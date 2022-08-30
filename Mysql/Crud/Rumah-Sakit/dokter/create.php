<?php
	include 'connection.php';
?>

<h2>Buat data Dokter</h2>

<br>

<form action="create_proses.php" method="POST">

	<label>Nama</label><br>
	<input type="text" name="nama">
	<br><br>
	
	<label>Telephone</label><br>
	<input type="text" name="telephone">
	<br><br>
	
	<label>Spesialis</label><br>
	<input type="text" name="spesialis">
	<br><br>
	
	<label>Alamat</label><br>
	<input type="text" name="alamat">
	<br><br>
	
	<button>Buat Data</button>
</form>
