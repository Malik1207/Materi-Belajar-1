<?php
	class Produk {
		public $jenis = "";
		public $merek = "";
		public $stok = "";
		
		public function borongProduk($jumlah = 10){
			$this->stok = $this->stok - $jumlah;				
		}
		
		public function cekStok(){
			return "Sisa Stok: ".$this->stok. "<br>" ;
		}
	}
	
	$produk01 = new Produk();
	$produk01->jenis = "Televisi";
	$produk01->merek = "Samsung";
	$produk01->stok = 54;
	
	$produk01->borongProduk();	//Sisa Stok 44
	echo $produk01->cekStok();
	
	$produk01->borongProduk(20);	//Sisa Stok 24
	echo $produk01->cekStok();
	
