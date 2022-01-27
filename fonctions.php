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
    echo "<pre>"
    var_dump($param);
    echo "</pre>"
}