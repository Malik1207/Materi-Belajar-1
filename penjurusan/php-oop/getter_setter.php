<?php
	class Produk {
		private $merek;
		private $stok;
		
		public function setMerek($merek) { //Setter
			$this->merek = $merek;
		}
		
		public function setStok($stok) {		//Setter
			$this->stok = $stok;
		}
		
		public function getMerek() {			//Getter
			return $this->merek;
		}
		
		public function getStok() {			//Getter
			return $this->stok;
		}
	}
	
	$produk01 = new Produk();
	$produk01->setMerek("Acer");
	$produk01->setStok(10);
	
	echo $produk01->getMerek(); 				//Acer
	echo "<br>";
	echo $produk01->getStok();					//10
