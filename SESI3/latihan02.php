<?php
   $age = array("Gatotkaca"=>"35","Harly"=>"37","Jhonson"=>"43");
   echo "Umur dari Gatotkaca ".$age["Gatotkaca"]. " tahun<br>";

   echo"<hr>";

   foreach($age as $nama => $umur){
       echo "Umur dari ". $nama . " : "  . $umur . "<br>";
   }