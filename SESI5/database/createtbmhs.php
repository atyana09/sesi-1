<?php
   
    include("koneksi.php");

    $tble = "CREATE TABLE tbMHS(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        nim VARCHAR(35),
        prodi VARCHAR(255),
        jeniskelamin VARCHAR(255),
        tglahir DATE,
        idmhs varchar(255)
    );";

    $hsl = mysqli_query($cnn , $tble);
    if($hsl){
        echo "Tabel tbMHS ==> sukses";
    }