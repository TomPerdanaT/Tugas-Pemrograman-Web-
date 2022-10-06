<?php
    $nbarang = $_GET ["nbarang"] ;
    $sbarang = $_GET ["sbarang"];
    $deskripsi = $_GET ["deskripsi"];
    if (isset($deskripsi)){
        echo "nama produk ini adalah";
        echo "</br>";
        echo "$nbarang dengan jumlah stock $sbarang. $deskripsi";
        echo "</br>";
        echo "</br>";
        echo "Bayar disini";
    }

?>