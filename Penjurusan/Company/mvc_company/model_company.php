<?php
	function buatKoneksi() {
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "12345678";
		$dbname = "kampusku";
		return mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	}
	
	//Ambil table Mahasiswa
	function getTableMahasiswa() {
		$link	  = buatKoneksi();
		$query  = "SELECT * FROM company";
		$result = mysqli_query($link,$query);
		
		//Ambil semua isi tabel ke dalam bentuk array 2 Dimensi
		$hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $hasil;
	}
	
