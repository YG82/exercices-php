<?php

// Exercice 3 : Calculer la somme des nombres de 1 à 100.
// Pseudo-code :
// somme = 0
// pour i de 1 à 100 faire
//   somme += i
// afficher somme

$x = 0;
$y = 100;
$sum = 0;

// do{
//     echo $x. '<br>';
//     $x++;
// $somme += $x;

// }while($x < 100);

// echo "$somme";

for ( $x = 0 ; $x <= $y ;$x++){
    $sum += $x;  
}
echo "$sum";



//toujours privilegier les boucles for pour eviter les boucles infinies