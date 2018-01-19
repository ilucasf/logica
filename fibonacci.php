<?php


$ant2 = 0;
$ant1 = 1;

  echo "0 \n";
  echo "1 \n";

for($i=1; $i < 100; $i++){
  $vig = $ant1 + $ant2;
  echo "$vig \n";
  /* Atualiza os ultimos numeros da sequencia */
  $ant2 = $ant1;
  $ant1 = $vig ;
}
