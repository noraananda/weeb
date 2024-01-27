<?php

$coum = 3.50;
$memuaskan = 3.00;
$cukup = 2.00;

$nilai = 2.50;

if($nilai >= $coum){
    echo " cumloude";
}elseif($nilai>= $memuaskan){
    echo " memuaskan";
}elseif($nilai >= $cukup){
    echo " cukup";
}else{
    echo " nilai tidak memuaskan";
}


