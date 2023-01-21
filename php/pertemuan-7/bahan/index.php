<html>

	<head>
		<title>Belajar PHP | Diskon</title>
	</head>
	
	<body>
	
		<h3>1.Diskon 0% jika di bawah 50,000</h3>
		<h3>2.Diskon 20% jika di atas 50,000</h3>
		<h3>3.Diskon 25% jika di atas 300,000</h3>
		<h3>4.Diskon 30% jika di atas 1000,000</h3>
		
		<form method= "POST" action="index.php">

		<table>
			
			<tr><br>
				<td>Harga</td>
				<td><input type="number" name="harga" /></td>
			</tr>

			<tr>
				<td>
					<label>
						<button type=”submit” name=”Submit” value=”submit” >Submit</button>
					</label>
				</td>
			</tr>
		</table>

		</form>
		<div id=”hasil”>

		<?php
		
		$harga = $_POST['harga'];
		
		if ($harga >= 50000) {
		
		$totalDiskon = (($harga*20)/100);
		$totalBayar = ($harga-$totalDiskon);
		$diskon = '20%';

		}
		if ($harga >= 300000) {
		
		$totalDiskon = (($harga*25)/100);
		$totalBayar = ($harga-$totalDiskon);
		$diskon = '25%';

		}
		if ($harga >= 1000000) {
		
		$totalDiskon = (($harga*30)/100);
		$totalBayar = ($harga-$totalDiskon);
		$diskon = '30%';

		}
		
		elseif ($harga <= 50000){
		$totalDiskon = (($harga*0)/100);
		$totalBayar = ($harga-$totalDiskon);
		$diskon = '0%';
		}
		

		?>
		
		<h1><?php echo 'Harga Barang = Rp '.$harga;?></h1>
		<h1><?php echo 'Diskon = '.$diskon;?></h1>
		<h1><?php echo 'Potongan Diskon = Rp '.$totalDiskon;?></h1>
		<h1><?php echo 'Harga Barang Setelah Diskon = Rp '.$totalBayar;?></h1>
	
	</body>

</html>
