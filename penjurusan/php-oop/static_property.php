<?php
	class Produk {
		public static $totalProduk = 100;
		
		public function cekProduk() {
			return "Total produk ada".self::$totalProduk;
		}
	}
	
	class Laptop extends Produk {
		public function cekLaptop(){
			return self::cekProduk(). ', termasuk 3 jenis laptop <br>';
		}
	}
	
	class Tv extends Produk {
		public function cekTv(){
			return parent::cekProduk(). ', termasuk 33 jenis Tv <br>';
		}
	}
	
	class Hp extends Produk {
		public function cekHp(){
			return Produk::cekProduk(). ', termasuk 53 jenis Hp <br>';
		}
	}
	
	echo Produk::$totalProduk;		//100
	echo "<br>";
	echo Produk::cekProduk();
	echo "<br>";
	echo Laptop::$totalProduk;		//100
	echo "<br>";
	
	$produk01 = new Laptop();
	echo $produk01->cekLaptop();
