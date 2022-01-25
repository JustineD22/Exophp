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