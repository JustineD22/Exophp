<?php

$resultat = "<ul>";

for ($i = 0; $i < 100; $i++) {
    if ($i % 3 == 0) {
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>";
    }
    
}

$resultat .= "</ul>";

echo $resultat;

$toto = 0;

while ($toto < 100) {
    echo $toto . "br/>";
    $toto++;
}