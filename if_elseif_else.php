<?php

$jaket = 300;
$baju = 150;
$celana = 200;
$uang = 160;

if($uang <= $jaket ){
    echo " beli jaket";
}elseif ($uang <= $baju){
    echo " beli baju";
}elseif($uang <= $celana){
    echo " beli celana";
}else{
    echo "uang tidak cukup";
}