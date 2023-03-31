<?php
   $cars = array("Volvol","BMW","Toyota");
   $jmlta = count($cars);
   echo " Jumlah Data: ".$jmlta . " <br> ";
   for($i=0;$i<$jmlta;$i++){
    echo "<br>Kendaraan ". $cars[$i];
   }
   
   echo "<hr>";

   echo "</ol>";
   foreach($cars as $dta){
        echo "<li>kendaraan" . $dta . "</li>";

   }
   echo "</ol>";