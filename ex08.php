<?php

// Exercice 8 : Inverser une chaîne de caractères.
// Pseudo-code :
// pour i de longueur-1 à 0 faire
//   concaténer caractère à une nouvelle chaîne
// afficher la nouvelle chaîne


function inverserChaine($chaine) {
    $longueur = strlen($chaine);
    $inverse = '';

    for ($i = $longueur - 1; $i >= 0; $i--) {
        $inverse .= $chaine[$i];
    }

    return $inverse;
}

echo inverserChaine("Bonjour"); 

