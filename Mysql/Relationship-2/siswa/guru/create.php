<?php
	include_once ("../config/koneksi.php");
?>

<h2>Buat data Guru</h2>

<br>

<form action="create_proses.php" method="POST">

	<label>Nama</label><br>
	<input type="text" name="nama">
	<br><br>
	
	<label>Alamat</label><br>
	<Textarea name="alamat"></Textarea>
	<br><br>
	
	<label>Nip</label><br>
	<input type="text" name="nip">
	<br><br>
	
	<button>Buat Data</button>
</form>
