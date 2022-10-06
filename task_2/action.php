<?php
	$nproduk = $_GET ["nproduk"];
	$sproduk = $_GET ["sproduk"];
	$desk = $_GET ["desk"];
	if (isset($desk)){
		echo "Nama Produk ini adalah $nproduk dengan";
		echo "</br>";
		echo "jumlah stock $sproduk. $desk";
		echo "</br>";
		echo "</br>";
		echo "Bayar Disini";

	}	
?>