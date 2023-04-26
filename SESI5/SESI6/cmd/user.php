<?php
    include("database/koneksi.php");

    function createuser($nama,$email,$user,$password){
        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tbuser(nama,email,username,passky,iduser)VALUES(
            '$nama',
            '$email',
            '$user',
            '$password',
            '$iduser',
        );";
         $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("koneksi ke DBMS Mysql gagal");
         $stt = mysql_query($cnn,$sql);
         return $stt;

    }