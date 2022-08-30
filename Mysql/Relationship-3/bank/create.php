<form action="create_proses.php" method="POST">

	<label>Nama Bank</label>
	<input type="text" name="name">
	<br><br>
	
	<label>Kode Bank</label>
	<input type="number" name="code">
	<br><br>
	
	<input type="submit" value="submit">
	
</form>

<?php
	include_once ('../config/koneksi.php');
?>
