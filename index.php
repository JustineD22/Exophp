<?php

$valeur = 42;
$resultat = "";

if (is_numeric($valeur)) {
    switch ($valeur) {
        case ($valeur > 0):
        $resultat = "positive";
        break;
        
        case ($valeur < 0):
        $resultat = "négative";
        break;

        default:
        $resultat = "nulle";
}}
else {
    $resultat = "non numérique";
}

echo "La valeur est $resultat.";