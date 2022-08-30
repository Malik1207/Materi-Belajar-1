<?php
	include ("tugas-name-space-2.php");
	include ("tugas-name-space-3.php");
	
	use Novel\Advanture\Supernova\Perpustakaan as SupernovaBuku;
	use Novel\Romance\Hujan\Perpustakaan as HujanBuku;
	
	$produk01 = new SupernovaBuku();
	echo $produk01->buku;
	
	echo "<br>";
	
	$produk01 = new HujanBuku();
	echo $produk01->buku;
