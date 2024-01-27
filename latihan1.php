<?php

$a = 3.50;
$b = 3.00;
$c = 2.50;
$nilai = 3.70;

switch ($nilai){
    case $nilai >= $a:
        echo "cumlaude";
    break;
    case $nilai >= $b:
        echo "memuaskan";
        break;
    case $nilai <= $c:
        echo "cukup";
    break;        
    default:
    echo "nilai anda tidak valid";    
}