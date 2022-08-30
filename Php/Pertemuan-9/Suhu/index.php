<html>

	<head>
		<title>Konversi Suhu</title>
		<style>
		
			body {
				background-image: radial-gradient(circle, #039dfc, #ed2b2b);
			}
			.judul {
				display: flex;
				justify-content: center;
			}
			h4 {
				border: 20px ridge #161E54;
				border-radius: 5px;
				width: 50%;
				font-size: 50px;
				font-family: sans-serif;
				background: #88E0EF;
				text-align: center;
			}
			.form {
				display: flex;
				justify-content: center;
				font-size: 20px;
			}
			form {
				border: 25px groove #161E54;
				border-radius: 5px;
				background: #CDDEFF;
				width: 50%;
				padding: 50px;
			}
			.form-php {
				display: flex;
				justify-content: center;
				font-size: 20px;
			}
			
		</style>
	</head>
	
	<body>
	
		<div class="judul">
			<h4>KONVERSI SATUAN SUHU</h4>
		</div>
		<div class="form">
			<form action="index.php" method="POST">
			
				Suhu <input type="text" name="suhu" placeholder="°C"/> <br><br>
				Konversi Ke : 
				<input type="radio" name="konversi" value="reamur"/>Reamur
				<input type="radio" name="konversi" value="fahrenheit"/>Fahrenheit
				<input type="radio" name="konversi" value="kelvin"/>Kelvin
				<br><br>
				<input type="submit" name="submit" value="KONVERSI"/>
				<br><br>
				
				<?php

					if (isset($_POST['submit'])) {
					
						$suhu = $_POST['suhu'];
						$konversi = $_POST['konversi'];
						echo "Suhu : $suhu °C <br>";
						
						if ($konversi == 'reamur') {
						
							$hasil = (4/5) * $suhu;
							echo "Hasil konversi ke Reamur : $hasil ºRé";
						}  else if ($konversi == 'fahrenheit') {
							$hasil = (9/5) * $suhu + 32;
							echo "Hasil konversi ke Fahrenheit : $hasil °F";
						}  else if ($konversi == 'kelvin') {
							$hasil = $suhu + 273.15;
							echo "Hasil konversi ke kelvin : $hasil K";
						}
						 else {
							echo "Pilih dulu konversinya";
						}
						
					}

				?>
				
			</form>
		</div>
		
	</body>

</html>

