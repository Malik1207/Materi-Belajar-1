<html>

	<head>
	
		<title>Pertemuan 7 | Hitung Umur</title>
		
		<style>
		
			body {
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.form-input {
				display: block;
				padding: 5px;
				font-size: 12px;
				border-radius: 5px;
				margin-top: 5px;
			}	
			.form-group {
				box-shadow: 5px 5px 5px grey;
				border-radius: 10px;
				padding: 10px;
				margin: auto;
				width: 50%;
				height: 50%;
			}
			.d-flex {
				display: flex;
				justify-content: center;
				justify-content: space-around;
				align-items: center;
			}
		</style>
	
	</head>
	
	<body>
	
	
			<form class="form-group d-flex" action="index.php" method="POST">
			
			<div>
			
				<label for="umur">Tanggal lahir anda</label>
				<input class="form-input" id="umur" type="DATE" name="umur">
				<input type="submit" value="hitung" class="form-input">
				
			</div>
			
			<div>
			
				<?php
					$tanggalLahir = $_POST['umur'];
					
					$convert = new DateTime($tanggalLahir);
					
					echo $tanggalLahir;
					
					$today = new DateTime('now'); //Date['Y-m-d']
					
					$tahun = $today->diff($convert)->y;
					
					$bulan = $today->diff($convert)->m;
					
					$hari = $today->diff($convert)->d;
					
					echo " Umur ".$tahun." Tahun ".$bulan." Bulan ".$hari." Hari ";
				?>
			
			</div>
			
			
		
		</form>
	
	</body>

</html>
