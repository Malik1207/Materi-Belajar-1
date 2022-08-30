<?php
	$sapa = function($nama){
		printf("Hai %s\r\n", $nama);
	};
	
	$sapa('Dunia');
	echo "<br>";
	$sapa('Bulan');
	echo "<br>";
	
	echo preg_replace_callback('~-([a-z])~', function ($setel) {
		return strtoupper($setel[1]);
	}, 'Hai-dunia-hari-ini');
	echo "<br>";
	
	$pesan = 'Hallo';
	
	$contoh = function() use ($pesan) {
		var_dump($pesan);
	};
	$contoh();
	
	
