<?php
	class Produk {
		public $merek;
		public $harga;
		
		public function __construct($merek,$harga) {
			$this->merek = $merek;
			$this->harga = $harga;
		}
		
		public function intro() {
				echo "Produk {$this->merek} {$this->harga}";
			}
	}
	
	class Televisi extends Produk {
			public function message() {
				echo 'Produk Contoh ';
			}
		}
		
		$televisi = new Televisi('Samsung',100000);
		$televisi->message();
		$televisi->intro();
