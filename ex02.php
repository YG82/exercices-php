<?php

// Exercice 2 : Afficher les nombres pairs de 0 à 20.
// Pseudo-code :
// pour i de 0 à 20 faire
//   si i % 2 == 0 alors
//     afficher i
// fin

for($x = 0; $x <= 20; $x++){
    if ($x % 2 == 0)
    echo $x. '<br>';
}