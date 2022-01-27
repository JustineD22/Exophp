<?php

function bonjour ()
{
    echo "Bonjour !";
}

function bonjourPerso (string $nom): string 
{
    return "Bonjour $nom !";
}

function surfaceRectangle (float $x, float $y): float 
{
    return abs($x) * abs($y);
}

function volume (float $x, float $y, float $z): float
{
    return abs($x) * abs($y) * abs($z);
}

function dump($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}

function afficherTab(array $tableau): string
{
    $resultat = "<ul>";

    for ($i = 0; $i < count($tableau); $i++){
        $resultat .= "<li>";
        if(is_array($tableau[$i])){
            $resultat .= "C'est un tableau !";
    } else {
        $resultat .= $tableau[$i];
    } 
     $resultat.="</li>";
    } 

    $resultat.= "</ul>";

    return $resultat;
}
