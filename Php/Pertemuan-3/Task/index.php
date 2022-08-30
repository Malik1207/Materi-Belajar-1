
<html>

		<head>
		
			<title>Tugas Mas Rama</title>
			
			<style>
				
				.judul {
					font-family: sans-serif;
					font-size: 50px;
					text-align: center;
				}
			
				.string {
					color: red;
				}
				.integer {
					color: blue;
				}
				.aray {
					color: green;
				}
				.jenis {
					font-size: 20px;
					font-family: sans-serif;
					font-weight: bold;
				}
			
			</style>
			
		</head>
		
		<body>
		
		<h1 class="judul">Tugas Mas Rama</h1>
		
		<?php
		
			#Srting
			$a = "Nama : Abd Malik";
			$b = "Asal : Kalimantan Timur";
			$c = "Umur : 20 Tahun";
			
			print "<p class='jenis'>STRING</p>";
			print "<p class='string'>$a</p>";
			print "<p class='string'>$b</p>";
			print "<p class='string'>$c</p>";
			
			#Integer
			$A = 30;
			$B = 55;
			$C = 90;
			
			$perkalian = $A * $B * $C;
			
			print "<p class='jenis'>INTEGER</p>";
			print "<p class='integer'>$perkalian</p>";
			
			#Float
			
			$x = 13.67;
			$y = 12.33;
			$z = 11.22;
			
			print "<p class='jenis'>FLOAT</p>";
			var_dump($x,$y,$z);
			print "<br>";
			
			#Null
			$n = "Mas Rama";
			$n = "Asal Kalimanta";
			$n = null;
			
			print "<p class='jenis'>NULL</p>";
			var_dump($n);
			print "<br>";
			
			#Aray
			$country = array (" Greece "," Netherlands "," America ");
			
			print "<p class='jenis'>ARRAY</p>";
			print "<p class='aray'>$country[0]$country[1]$country[2]</p>";
			
			#Boolean
			$T = true;
			$F = false;
			
			print "<p class='jenis'>BOOLEAN</p>";
			print $T.$F;
	
		?>
		
		</body>
		
</html>

