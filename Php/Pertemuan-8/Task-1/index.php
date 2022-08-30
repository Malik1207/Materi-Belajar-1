<html>

	<head>
	
		<title>PHP</title>
		<link href="style.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
		
	</head>
	
	<body class="php-body">
	
		<div class="form-php">
		
			<?php
				$tanggalLahir = $_POST['umur'];
									
				$convert = new DateTime($tanggalLahir);
				
				echo "Tanggal Lahir ";		
				echo $tanggalLahir;
									
				$today = new DateTime('now'); //Date['Y-m-d']
				echo "<br><br>";
				$tahun = $today->diff($convert)->y;
									
				$bulan = $today->diff($convert)->m;
									
				$hari = $today->diff($convert)->d;
									
				echo " Umur ".$tahun." Tahun ".$bulan." Bulan ".$hari." Hari ";
			?>
			
		</div>
	
	</body>
	
</html>

