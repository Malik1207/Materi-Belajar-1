<html>

	<head>
		<title>Belajar PHP | Diskon</title>
	</head>
	
	<body>
	
		<form action="index.php" method="POST">
			
			<label>Beras 1 kg</label>
			<input type="number" name="beras" value="12000"/>
			<br><br>
			<label>Telur 1 kg</label>
			<input type="number" name="telur" value="18000"/>
			
			<select name="diskon">
				<option value="0%">0%</option>
				<option value="10%">10%</option>
				<option value="20%">20%</option>
				<option value="30%">30%</option>
				<option value="40%">40%</option>
				<option value="50%">50%</option>
				<option value="60%">60%</option>
				<option value="70%">70%</option>
				<option value="80%">80%</option>
				<option value="90%">90%</option>
			</select>
			
			<button type="submit">HASIL</button>
			
		</form>
		
			<?php
			
				$beras = $_POST['beras'];
				$telur = $_POST['telur'];
				$diskon = $_POST['diskon'];
				
				$penjumlahan = $beras + $telur;
				$potonganDiskon = $penjumlahan * $diskon/100;
				
				$hasil = $penjumlahan - $potonganDiskon;
				
			?>
			
			<h1><?php echo 'Harga Beras + Telur = Rp '.$penjumlahan;?></h1>
			<h1><?php echo 'Diskon = '.$diskon;?></h1>
			<h1><?php echo 'Harga Potongan Diskon = Rp '.$potonganDiskon;?></h1>
			<h1><?php echo 'Harga setelah Diskon = Rp '.$hasil;?></h1>
	
	</body>

</html>
