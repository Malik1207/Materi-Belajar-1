<html>

	<head>
	
		<title>Belajar PHP | Diskon</title>
		
	</head>
	
	<body>
	
		<h3>1.Diskon 0% jika di bawah Rp 50,000</h3>
		<h3>2.Diskon 20% jika di atas Rp 50,000</h3>
		<h3>3.Diskon 25% jika di atas Rp 300,000</h3>
		<h3>4.Diskon 30% jika di atas Rp 1000,000</h3>
		
		<form method= "POST" action="index.php">

			<label>Harga</label>
			<input type="number" name="harga" />

			<label>
				<button type= "submit" name= "Submit" value= "submit" >Submit</button>
			</label>

		</form>

		<?php
		
		$harga = $_POST['harga'];
		
		//Diskon 20% jika di atas Rp 50,000
		if ($harga >= 50000) {
		
		$totalDiskon = (($harga*20)/100);
		$totalBayar = ($harga-$totalDiskon);
		$diskon = '20%';

		}

		//Diskon 25% jika di atas Rp 300,000
		if ($harga >= 300000) {
		
		$totalDiskon = (($harga*25)/100);
		$totalBayar = ($harga-$totalDiskon);
		$diskon = '25%';

		}

		//Diskon 30% jika di atas Rp 1000,000
		if ($harga >= 1000000) {
		
		$totalDiskon = (($harga*30)/100);
		$totalBayar = ($harga-$totalDiskon);
		$diskon = '30%';

		}

		//Diskon 0% jika di bawah Rp 50,000
		elseif ($harga < 50000){
		$totalDiskon = (($harga*0)/100);
		$totalBayar = ($harga-$totalDiskon);
		$diskon = '0%';
		}
		

		?>
		
		<h1><?php echo 'Harga Barang = Rp '.number_format($harga);?></h1>
		<h1><?php echo 'Diskon = '.$diskon;?></h1>
		<h1><?php echo 'Potongan Diskon = Rp '.number_format($totalDiskon);?></h1>
		<h1><?php echo 'Harga Barang Setelah Diskon = Rp '.number_format($totalBayar);?></h1>
	
	</body>

</html>
