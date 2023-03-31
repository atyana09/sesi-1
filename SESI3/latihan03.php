<?php

   $mhs = array(
    array("NAMA"=>"Gatotkaca","ID"=>"123","KOTA"=>"JAWA"),
    array("NAMA"=>"Kadita","ID"=>"124","KOTA"=>"YOGYAKARTA"),
    array("NAMA"=>"Lou Yin","ID"=>"125","KOTA"=>"CIHNA"),
    array("NAMA"=>"Lancelot","ID"=>"126","KOTA"=>"GERMAN"),
   );

//    echo $mhs[0]["NAMA"];
//    echo "<br>";
//    print_r($mhs);
//    echo "<hr>";

   /* foreach($mhs as $dta){

      foreach($dta as $lb => $nval){
        echo $lb . "  :  " . $nval . "<br>";

      }

      echo"<hr>";
   } */

   header("Conten-type: application/json");
   echo json_encode($mhs);
