<?php
	class ProdukHandphone {
		public $produk = "HP";
		public $merek	= "Xiomi";
		public $harga	= "30000";
		
		public function PesanHandphone() {
			return "Produk diorder...";
		}
	}
	
	$handphone = new ProdukHandphone();
	$handphone->produk = "HP";
	$handphone->merek	 = "Apel";
	$handphone->harga	 = 200000;
	
	print_r($handphone);
	
	class ProdukLaptop {
		public $produk = "Laptop";
		public $merek	= "Dell";
		public $harga	= "250000";
		
		public function PesanLaptop() {
			return "Produk diorder...";
		}
	}
	
	$laptop = new ProdukLaptop();
	$laptop->produk = "Laptop";
	$laptop->merek	 = "HP";
	$laptop->harga	 = 900000;
	
	print_r($laptop);
	
	class ProdukKendaraan {
		public $produk = "Mobil";
		public $merek	= "Xenia";
		public $harga	= "75000";
		
		public function PesanKendaraan() {
			return "Produk diorder...";
		}
	}
	
	$kendaraan = new ProdukKendaraan();
	$kendaraan->produk = "Motor";
	$kendaraan->merek	 = "NMX";
	$kendaraan->harga	 = 950000
	
	print_r($kendaraan);
