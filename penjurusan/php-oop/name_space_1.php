<?php
	include("name-space-2.php"); 
	//namespace Miyako;	//Cara 1
	include("name-space-3.php");
	
	use RiceCooker\Miyako\Produk as MiyakoProduk;
	use Elektronik\KipasAngin\Maspion\Produk as MaspionProduk;
	
	$produk01 = new MiyakoProduk(); //Cara 2
	echo $produk01->merek;
	
	echo "<br>";
	
	$produk01 = new MaspionProduk(); //Cara 2
	echo $produk01->merek;
	
	

