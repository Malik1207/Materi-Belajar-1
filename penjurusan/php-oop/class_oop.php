<?php
	class ProductTelevisi { 				//Class
		public $product = "HP";				//Property
		public $merek = "Samsung"; 		//Access Modifier
		public $harga = 400000;
		
		public function pesanProduct() { //Method
			return "Produk dipesan...";
		}
	}
	
	$televisi = new ProductTelevisi();  //Object
	$televisi->product = "Laptop";
	$televisi->merek = "Asus";
	$televisi->harga = 1000000;
	
	$lemari = new ProductTelevisi(); 	//Object
	$lemari->product = "Lemari";
	$lemari->merek = "Sharp";
	$lemari->harga = 400000;
	
	print_r($televisi);
	echo "<br>";
	print_r($lemari);
	
	$mesinCuci = new ProductTelevisi();
	
	//var_dump($televisi);
