<?php
	class Produk {
		private $stok = 0;
		private $merek = "";
		
		public function setStok($stok){
			if (is_int($stok)) {
				$this->stok = $stok;
			} else {
				echo "Error: Stok harus angka bulat <br>";
			}
		}
		
		public function getStok() {
			return $this->stok;
		}
		
		public function __construct($stok,$merek) {
			$this->setStok($stok);
			$this->setMerek($merek);
		}
		
		public function setMerek($merek){
			if (is_string($merek)) {
				$this->merek = $merek;
			} else {
				echo "Error: Merek harus String <br>";
			}
		}
		
		public function getMerek() {
			return strtoupper($this->merek);
		}
		
	}
	
	$produk01 = new Produk('Apple',100);		//0
	echo "Stok Produk".$produk01->getMerek().' : '.$produk01->getStok();

	/*echo $produk01->getStok();
	echo "<br>";
	
	$produk01->setStok(10.5);		//Error: Stok harus Angka
	echo $produk01->getStok();
	echo "<br>";
	
	$produk01->setStok("Satu"); 	//Error: Stok harus Angka
	echo $produk01->getStok();
	echo "<br>";
	
	$produk01->setStok(10);
	echo $produk01->getStok();		//10
	echo "<br>";
	
	$produk01->setMerek("Dell Latitude");
	echo $produk01->getMerek();		//10
	echo "<br>";
