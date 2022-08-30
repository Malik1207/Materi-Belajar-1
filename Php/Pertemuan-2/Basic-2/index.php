<?php
	
	//String
		$nama = "Malix";
		$umur = "20 tahun";
		$asal = "East Kalimantan";
	
		echo $nama."<br>";
		echo $umur."<br>";
		echo $asal."<br>";
	
	//Number
		$jumlah = 90;
		
		echo $jumlah."<br>";
	
	//String Number
		$name = "joko ";
		$old = 20;
		
		echo $name.$old."<br>";
	
	//Strlen
	
		echo strlen("Bismillahirrahmanirrahim")."<br>";
	
	//Constanta
		const hobi = "futsal";
	
		echo hobi."<br>";
	
	//Loop
		$x = 1;
	
		while ($x <= 10) {
			echo $x."<br>";
			$x++;
		}
		
		for ($nilai_awal = 10; $nilai_awal >= 1; $nilai_awal --) {
			echo $nilai_awal."<br>";
		}
		
		$namaorang = ["Joko","Budi","Udin","Mail","Ali"];
	
	#for($a = 0; $a <= count($namaorang); $a++) {
		#echo $namaorang[$a]."<br>";
	#}
	
	#foreach ($namaorang as $names) {
		#echo $names."<br>";
	#}
	
		for($i = 1; $i <= 20; $i++) {
			for ($b = 1; $b <=$i; $b++){
			echo "*";
			}
			
			echo "<br>";
		}
	

?>






























