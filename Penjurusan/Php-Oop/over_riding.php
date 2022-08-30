<?php 
	//Properti OverRiding
	/*class Television {
		public $merek = "Sony";
	}
	
	class Kulkas extends Television {
		public $merek = "Panasonic";
	}
	
	$produk01 = new Kulkas();
	echo $produk01->merek;*/
	
	//Method OverRiding
	/*class Produk1 {
		public function hello() {
			return "Ini dari Produk";
		}
	}
	
	class Televisi extends Produk1 {
		public function hello() {
			return "Ini dari Televisi";
		}
		/*public function helloProduk() {
			return parent::hello();
		}
	}
	*/
	
	/*$produk01 = new Televisi();
	echo $produk01->helloProduk();*/
	
	//Construct OverRiding
	
	/*class Produk {
		public $jenis;
		public $merek;
		public $stok;
		
		public function __construct($jenis,$merek,$stok) {
			$this->jenis = $jenis;
			$this->merek = $merek;
			$this->stok = $stok;
		}
	}
	
	class Televisi extends Produk {
		public $jenisStok;
		
		public function __construct($jenis,$merek,$stok,$jenisStok) {
			parent::__construct($jenis,$merek,$stok);
			
			$this->jenisStok = $jenisStok;
		}
	}
	
	$produk01 = new Televisi("Televisi","Samsung",20,"Satuan");
	echo "<pre>";
	print_r($produk01);
	echo "</pre>";*/
	
	//Destruct OverRiding
	/*class Produk {
		public $jenis;
		public $merek;
		public $stok;
		
		public function __construct($jenis,$merek,$stok) {
			$this->jenis = $jenis;
			$this->merek = $merek;
			$this->stok = $stok;
		}
		
		public function __destruct(){
		unset($this->jenis,$this->merek,$this->stok);
			
		echo "Property Class Produk sudah dihapus...<br>";
	}
	
	}
	
		

	
	class Televisi extends Produk {
		public $ukuranLayar;
		
		public function __construct($jenis,$merek,$stok,$ukuranLayar) {
			parent::__construct($jenis,$merek,$stok);
			$this->ukuranLayar = $ukuranLayar;
		}
		public function __destruct() {
			unset($this->ukuranLayar);
			echo "Property class Televisi sudah dihapus...<br>";
			parent::__destruct();
		}
	}
	
	$produk01 = new Televisi("Televisi","Samsung",20,32);
	echo "<pre>";
	print_r($produk01);
	echo "</pre>";*/
	
	//Final Method
	
	/*class Produk {
		final public function hello() {
			return "Ini dari Produk";
		}
	}
	class Televisi extends Produk {
		public function hello() {
			return "ini dari Televisi";
		}
	}
	
	$produk01 = new Televisi();
	
	echo $produk01->hello();*/
	
	//Final Class
	
	final class Produk {
		public function hello() {
			return "Ini dari Produk";
		}
		class Televisi extends Produk {
			public function hello() {
				return "Ini dari Produk";
			}
		}
	}
	
	$produk01 = new Produk();
	echo $produk01->hello();
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
