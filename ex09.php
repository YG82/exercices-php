<?php

// Exercice 9 : Vérifier si un mot est un palindrome.
// Pseudo-code :
// inverser le mot
// si mot == mot inversé alors
//   afficher 'palindrome'
// sinon
//   afficher 'non'

$mot = "kayak";

function inverserChaine($chaine) {
    $longueur = strlen($chaine);
    $inverse = '';

    for ($i = $longueur - 1; $i >= 0; $i--) {
        $inverse .= $chaine[$i];
    }

    return $inverse;
}

if ($mot == inverserChaine($mot)) {
    echo 'palindrome';
}
else {
    echo 'non';
}