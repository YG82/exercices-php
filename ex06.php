<?php

// Exercice 6 : Trouver le plus grand de trois nombres.
// Pseudo-code :
// si a >= b et a >= c alors
//   afficher a
// sinon si b >= a et b >= c alors
//   afficher b
// sinon
//   afficher c

$a = 1; 
$b = 2; 
$c = 3;

if ($a >= $b && $a >= $c ) {
 echo "a";
}

elseif ($b >= $a && $b >= $c) {
   echo "b";

} 
else {
    echo "c";
}

