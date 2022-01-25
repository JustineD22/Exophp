<?php

$valeur = 42;
$resultat = "";

if (is_numeric($valeur > 0)) {
    $resultat = "positive";
}
elseif ($valeur < 0) {
    $resultat = "negative";
}
else {
    $resultat = "nulle";
}
else {
    
}

echo "La valeur est $resultat.";