<?php

// Exercice 10 : Trouver la somme des chiffres d’un nombre.
// Pseudo-code :
// somme = 0
// tant que n > 0 faire
//   somme += n % 10
//   n = n // 10
// afficher somme

$x = 0;
$n = 21;

while ($n > 0){
    $x += $n % 10 ; 
    $n = intval($n / 10);
    echo 'sum '.$x . '<br>';
}