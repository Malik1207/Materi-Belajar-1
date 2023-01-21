<?php

	//Materi Variabel dan Type Data
		$name = "Augusta Ada Lovelace";
		print "I love $name";
	
		$kelas = "Design";
		
		function kelas() {
			// using x inside this function will generate an error
			echo "<p>Tampilkan Variabel Kelas : $kelas</p>";
		}
		kelas(); 
			echo "<p>Tampilkan Variabel Kelas : $kelas</p>";
		
	//Variabel Statis
		function pintu() {
			static $x = 0;
			echo $x;
			$x++;
		}
		
		pintu();
		echo "<br>";
		pintu();
		echo "<br>";
		pintu();
	
	//Type Data String
		$people = "crowd";
		echo "<br>$people";
	
	//Type Data Number
		$togel = 5.04;
		echo "<br>".$togel."<br>";
		
	//Type Data Float
		$y = 12323.232; 
		var_dump($y);
		echo "<br>";
		
	//Type Data Array
		$orang = array ("Roma","Yasir","Mail");
		print($orang[0]);
		echo "<br>";		
		var_dump($orang[0]);		
		echo "<br>";		
		
	//Type Data Null
		$rama = "orang kalimanta barat";
		$rama = null;
		var_dump ($rama);
		echo "<br>";		
		
	//Type Data Object Pr
	
	#String Function
	//strlen()
		$z = "MALIX";
		echo strlen($z);
		echo "<br>";		
		
	//str_word_count
		$home = "Ana suka baca buku novel";
		print str_word_count($home);
		
	//strrev
		print "<br>strrev<br>";
		$house = "Kami pagi-pagi udah olahraga bareng";
		echo strrev($house);
		echo "<br>";		
		
	//strpos
		echo strpos("Abdul Malik", "Malik");
		echo "<br>";		
		
	//str_replace
		echo str_replace("sayang", "kamu", "Hai sayang!");
		echo "<br>";		

	#Number
		$number = 123;
		var_dump (is_int($number));
		$number = 123.3;
		var_dump (is_float($number));
		
		$nomor = 1.9e411;
		var_dump($nomor);
	
?>

