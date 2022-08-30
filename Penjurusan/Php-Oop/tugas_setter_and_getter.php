<?php
	class Produk {
		private $sku;
		private $stok;
		
		public function setSku($sku) {
			if (preg_match("/^[A-Z]{3}[0-9]{3}$/",$sku)) {
				$this->sku = $sku;
			} else {
				die ("Error: sku harus 6 digit (3 huruf dan 3 angka), seperti AAA001<br>");
			}
		}
		
		public function setStok($stok) {
			if (is_int($stok)&& $stok>0) {
				$this->stok = $stok;
			} else {
				die ("Error:  stok harus angka bulat positif<br>");
			}
		}
		
		public function __construct($sku,$stok) {
			$this->setSku($sku);
			$this->setStok($stok);
		}
		
		public function getSku() {
			return $this->sku;
		}
		
		public function getStok() {
			return $this->stok;
		}
	}
	
	$produk01 = new Produk("AAA000", 10);
	
	echo $produk01->getSku();
	echo "<br>";
	echo $produk01->getStok();
