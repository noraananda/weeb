<?php
//$a = 1;
//$b = 0;
//$hasil = ! $a;
//echo $hasil;

// &&, ||,! , xor , or 
$a = 1;
$b = 0;
$hasil = $a && $b;
echo $hasil."\n";

$c = 1;
$d = 0;
$hasil = $c || $d;
echo $hasil."\n";

$e = 1;
$f = 0;
$hasil = ! $e;
echo $hasil."\n";

$x = 1;
$y = 0;
$hasil = $x xor $y;
echo $hasil."\n";

$i = 1;
$h = 0;
$hasil = $i or $h;
echo $hasil."\n";
