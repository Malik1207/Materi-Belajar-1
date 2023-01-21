<?php 
	class Produk {
		public $jenis = "";
		public $merek = "";
		
		public function pesanProdukTelevisi(){
			return "Televisi dipesan...";
		}
		
		public function pesanProdukMesinCuci(){
			return "Mesin Cuci dipesan...";
		}
		
		public function pesanProdukKulkas(){
			return "Kulkas dipesan...";
		}
	}
	
	$produk01 = new Produk();
	$produk01->jenis = "Televisi";
	$produk01->merek = "Samsung";
	
	$produk02 = new produk();
	$produk02->jenis = "Mesin Cuci";
	$produk02->merek = "LG";
	
	$produk03 = new produk();
	$produk03->jenis = "Kulkas";
	$produk03->merek = "Polytron";
	
	echo $produk01->pesanProdukTelevisi();
	echo "<br>";
	echo $produk02->pesanProdukMesinCuci();
	echo "<br>";
	echo $produk03->pesanProdukKulkas();
	echo "<br>";
