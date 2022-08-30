<html>

	<head>
		<title>Function | PHP</title>
	</head>
	
	<body>
	
		<h1>Pertemuan 4 | Function</h1>

		<?php 
		
	
			
			$tambah = 1 + 2;
			
			echo $tambah."<br>";	
			var_dump ($tambah);
			echo "<br>";
			
			$number1 = 15;
			$number2 = 15;
			$result = $number1 * $number2;
			
			echo $result."<br>";
			
			#Function
			function pengurangan ($bilangan1, $bilangan2, $bilangan3){
				$hasil = $bilangan1 - $bilangan2 - $bilangan3;
				echo $hasil;

			}
			
			pengurangan(20, 10, 5);
			echo "<br>";
			
			function familyName($name, $year) {
				echo ("Nama saya". $name . " dan umur saya sekarang ". $year);
			}
			
			familyName (" Fatin ", 20); 
			echo "<br>";
			
			#Explode(string ke array)
			$str = "Hari juma'at adalah hari libur sekolah ku fatra";
			
			var_dump(explode(" ",$str));
			
			#Inplode(array ke string)
			$arr1 = ['one','two','three','four'];
			var_dump (implode(' ', $arr1));
			echo "<br>";
			
			#strlen
			$M = "Abdoel";
			
			echo strlen($M);
			echo "<br>";

			#strtolower
			$N = "MALIX";
			
			echo strtolower($N);
			echo "<br>";
			
			#strtoupper
			$O = "malix";
			
			echo strtoupper($O);
			echo "<br>";
			
			#Dateformat
			
			$tanggal = date_create("2021-12-14");
			echo date_format ($tanggal, "Y/M/D H:i:s");
			echo "<br>";
			
			#Dateformat and hour
			
			echo "Zona waktu dari server: " .date("Y-m-d G:i:s"). "\n"."<br>";
			
			$tz = 'Europe/Lisbon';
			$dt = new DateTime("now", new DateTimeZone($tz));
			$timestamp = $dt ->format("Y-m-d H:i:s");
			echo "Waktu di portugal : $timestamp\n" 
			
		?>
	
	</body>

</html>
