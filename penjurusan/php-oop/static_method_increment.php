<?php
	class Produk {
		private static $totalProduk = 0;
		
		public function __construct(){
			self::$totalProduk++;
			echo "Class Produk dibuat, total produk = ".self::$totalProduk."<br>";
		}
	}
	
	$produkA = new Produk(); //1
	$produkB = new Produk(); //2
	$produkC = new Produk(); //3
	$produkD = new Produk(); //4
