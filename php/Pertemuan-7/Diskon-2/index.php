<html>

	<head>
		<title>Belajar PHP | Diskon</title>
	</head>
	
	<body>
	
		<form action="index.php" method="POST">
			
			<label>Beras 1 kg</label>
			<input type="number" name="beras" value="12000"/>
			
			<label>Jumlah Beras</label>
			<input type="number" name="jumlahberas" value="1"/>
			<br><br>
			<label>Telur 1 kg</label>
			<input type="number" name="telur" value="18000"/>
			<label>Jumlah Telur</label>
			<input type="number" name="jumlahtelur" value="1"/>
			<br><br>
			
			<select name="diskon">
				<option value="0%">Diskon 0%</option>
				<option value="10%">Diskon 10%</option>
				<option value="20%">Diskon 20%</option>
				<option value="30%">Diskon 30%</option>
				<option value="40%">Diskon 40%</option>
				<option value="50%">Diskon 50%</option>
				<option value="60%">Diskon 60%</option>
				<option value="70%">Diskon 70%</option>
				<option value="80%">Diskon 80%</option>
				<option value="90%">Diskon 90%</option>
			</select>
			
			<button type="submit">HASIL</button>
			
		</form>
		
			<?php
			
				$beras = $_POST['beras'];
				$telur = $_POST['telur'];
				$diskon = $_POST['diskon'];
				$jumlahBeras = $_POST['jumlahberas'];
				$jumlahTelur = $_POST['jumlahtelur'];
	
				$hargaBeras = $beras * $jumlahBeras;
				$hargaTelur = $telur * $jumlahTelur;
				
				$penjumlahan = $hargaBeras + $hargaTelur;
				
				$hargaDiskon = $penjumlahan * $diskon/100;
				
				$totalHarga = $penjumlahan - $hargaDiskon;
				
				$kembalian = $penjumlahan - $totalHarga;
				
			?>
			
			<h2><?php echo 'Total Harga Beras = '.$hargaBeras;?></h2>
			<h2><?php echo 'Total Harga Telur = '.$hargaTelur;?></h2>
			<h2><?php echo 'Total Harga Telur + Beras = Rp '.$penjumlahan;?></h2>
			
			<h1><?php echo 'Diskon = '.$diskon;?></h1>
			<h1><?php echo 'Total Harga = Rp '.$totalHarga;?></h1>
			
			<h1><?php echo 'Kembalian = Rp '.$kembalian;?></h1>
	
	</body>

</html>
