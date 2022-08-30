<?php
	class Produk {
		public $jenis = "";
		public $merek = "";
		public $stok = "";
		
		public function pesanProduk(){
			$this->stok = $this->stok;				
		}
		
		public function borongProduk($jumlah){
			$this->stok = $this->stok - $jumlah;
		}
		
		public function cekStok(){
			return "Sisa stok: ".$this->stok ."<br>";
		}
	}
	
	$produk01 = new Produk();
	$produk01->jenis = "Televisi";
	$produk01->merek = "Samsung";
	$produk01->stok = 54;
	
	echo $produk01->cekStok();		//Sisa Stok 54
	
	$produk01->borongProduk(10);	//Sisa Stok 44
	echo $produk01->cekStok();
	
	$produk01->borongProduk(25);	//Sisa Stok 19
	echo $produk01->cekStok();
	
