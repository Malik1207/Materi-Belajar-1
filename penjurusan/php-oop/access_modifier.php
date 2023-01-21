<?php
	//Public
	/*class Produk {
		public $merek;
		public function hello() {
			return "Ini adalah Produk";
		}
	}
	
	$produk01 = new Produk();
	
	$produk01->merek = "Asus";
	echo $produk01->hello();
	echo "<br>";
	echo $produk01->merek;*/
	
	//Protected
	class Produk {
		protected $merek = "Asus";
		protected function hello() {
			return "Ini adalah Produk";
		}
	}
	class Laptop extends Produk{
		public function helloLaptop() {
			return $this->hello()."Laptop".$this->merek;
		}
	}
	
	$produk01 = new Laptop();
	echo $produk01->helloLaptop();
