<?php

include 'fonctions.php';

$test = array(true, 12, 'toto');
$eleves = array('Michel', $test, 'Patrick', 'Bob');
$ages = [56, 42, 20, $eleves];

dump($ages);

echo afficherTableau($ages);

echo factorielle(10);

$stagiaires = [
    'Mathilde' => 27,
    'Pierre' => 30,
    'Raymonde' => 72
];

$stagiaires['Jean'] = 48;

dump($stagiaires);
