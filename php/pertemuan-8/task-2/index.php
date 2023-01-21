<html>

	<head>
	
		<title>Hitung Umur Lagi</title>
		
	</head>
	
	<body>
	
		<?php
		
			$tanggalLahir = $_POST['age'];
			$convert = new DateTime($tanggalLahir);
			
			echo " Your Birthday ".$tanggalLahir."<br>";
			
			$today = new DateTime('now');
			
			$year = $today->diff($convert)->y;
			$month = $today->diff($convert)->m;
			$day = $today->diff($convert)->d;
			
			echo $year." Years Old ".$month." Months ".$day." Days ";
		
		?>
	
	</body>
	
</html>

