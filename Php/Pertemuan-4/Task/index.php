<html>

	<head>
		<title>Function | PHP</title>
	</head>
	
	<body>
	
		
		<h1 style="text-align: center;">TUGAS</h1>

		<?php 
		
			echo "<p style='font-size: 30px;'>FUNCTION</p>";
		
			#Function-1
			function myProfile($name, $year) {
				echo (" My name is ". $name . " and I'm ". $year. " years old. ");
			}
			
			myProfile (" Abd Malik ", 20); 
			echo "<br>";
			
			#Function-2
			function penambahan ($angka1,$angka2,$angka3) {
				$result = $angka1 + $angka2 + $angka3;
				echo $result;
			}
			penambahan (5, 10, 15);
			echo "<br>";
			
			#Function-3
			function aritmatika ($number1,$number2,$number3) {
				$output = $number1 + $number2 * $number3;
				echo $output;
			}
			aritmatika (10, 5, 2);
			echo "<br>";
			
			#Function-4
			function country ($country1, $country2, $country3) {
				echo ($country1. $country2. $country3);
			}
			
			country (" Indonesia ", "Malaysia ", " Singapore ");
			echo "<br>";
			
			#Function-5
			function indonesia ($presiden1, $presiden2, $presiden3) {
				echo ($presiden1. $presiden2. $presiden3);
			}
			
			indonesia (" SOEKARNO ", " SOEHARTO ", " HABIBIE ");
			echo "<br><br>";
			
			echo "<p style='font-size: 30px;'>EXPLODE</p>";
			
			#Explode-1
			$str = "Indonesia tanah air ku";
			
			var_dump(explode(" ",$str));
			echo "<br>";
			
			#Explode-1
			$str = "Tanah tumpah darahku";
			
			var_dump(explode(",",$str));
			echo "<br>";
			
			#Explode-1
			$str = "Di sanalah aku berdiri";
			
			var_dump(explode($str,0));

		?>
	
	</body>

</html>
