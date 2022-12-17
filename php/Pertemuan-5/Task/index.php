<html>

	<head>
	
		<title>TUGAS | Form Handling</title>
		
	</head>
	
	<body>
		
		<h1>Input data</h1>
		
		<form action="result.php" method = "POST">

			<p>Nama</p>

				<input type="text" name="nama">
			
			<P>Nama Lengkap</P>
				
				<input type="text" name="nama-lengkap">

			<p>Tanggal Lahir</p>

				<input type="date" name="tanggal">
			
			<p>Alamat</p>
			
				<input type="text" name="alamat">
				
			<p>Umur</p>
			
				<input type="text" name="umur">
				
			<p>Hobi</p>
			
				<input type="text" name="hobi">

			<br><br>

			<label>Jenis Kelamin</label>

			<br><br>

				<span><input type="radio" name="jk" value="Laki-laki">Laki-laki</span>

			<br><br>
			
				<span><input type="radio" name="jk" value="Perempuan">Perempuan</span>
			
			<p>Status Kawin</p>
			
				<input type="text" name="status-kawin">
				
			<p>Nomor WA</p>
			
				<input type="text" name="nomor-wa">
				
			<p>E-mail</p>
			
				<input type="text" name="email">
				
			<br><br>
			
			<button>Submit</button>
			
		</form>
		
	</body>
	
</html>
