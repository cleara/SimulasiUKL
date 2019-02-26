<?php

$ibu = new mysqli("localhost", "root", "", "Cleara" );

$bapak ="SELECT * FROM produk";

$kawin = $ibu->query($bapak);

while($anak = $kawin->fetch_assoc()){
    echo "id       : "." ". $anak["id_produk"]." "
    . " Nama produk      : "." ". $anak["nama_produk"]." "
    . "Jumlah produk     :"." ". $anak["jumlah_produk"]." "
    ;
}
$ibu->close();
?>