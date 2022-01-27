<?php

require_once 'fonctions.php';
require_once 'constantes.php';

echo "<p>Afficher n° ligne :" .__LINE__."</p>";
var_dump(TVA);
//__FILE__ : chrmin fichier + nom complet
//__DIR__ : nom dossier dans lequel est le fichier
//__FUNCTION__ : contient nom de la fonction

$surface = surface(10, 22.5);
var_dump($surface);

$truc = bonjourPerso ("Michel");
$valeur = 42;
var_dump($truc);
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
?>
<p> <a href = "boucles.php"> Boucles </a> </p>
<p> <a href = "inclusion.php"> Inclusion </a> </p>