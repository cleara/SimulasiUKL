<?php
//1. koneksi(server, username(root) , pass-kosong, dbname)
//contoh = new mysqli("localhost", "root", "", "Cleara" );
$ibu = new mysqli("localhost", "root", "", "Cleara" );

/*
2. $sql => "CREATE READ UPDATE DELETE (crud)"
=> INSERT-SELECT-UPDATE-DELETE

*/
$bapak = " UPDATE produk
            SET
            nama barang ='Gula'
            WHERE id_produk=123";
//3. eksekusi sql
$ibu->query($bapak);

//boleh iya boleh tidak tapi sebaiknya pakek biar tidak lemot
$ibu->close();
?>