<?php
//$t = 14;

//if($t <30){
 //   echo "selamat hari sabtu";
//}



//$a = 10;
//$b = 15;

//if($a <$b){
   // echo " tidak menyenangkan";
//}


$t = date ("H");
if ($t < "10") {
    echo "Selamat hari jum'at ";
  } elseif ($t < "20") {
    echo "Selamat hari sabtu";
  } else {
    echo "Selamat berlibur";
  }

