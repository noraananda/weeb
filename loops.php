<?php

$i = 1;
while ($i < 6) {  
  echo $i;
  $i++;
  
}


// break
$a = 1;
while ($a < 6) {
  if ($a == 3) break;
  echo $a;
  $a++;
}

// continue

$angka = 0;
while ($angka < 6) {
  $angka++;
  if ($angka == 3) continue;
  echo $angka;
 
}

// endwhile
$e = 1;
while ($e < 6):
  echo $e;
  $e++;
endwhile;

?>
