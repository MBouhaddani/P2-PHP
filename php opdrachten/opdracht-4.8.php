<?php
$leeftijd = 16;
$magScooterRijbewijsHalen = false;

if ($leeftijd >= 16) {
    $magScooterRijbewijsHalen = true;
}

$leeftijd = 18;
$magStemmen = false;
$heeftStempas = false;

if ($leeftijd >= 18) {
    if ($heeftStempas) {
        $magStemmen = true;
    } else {
        $magStemmen = false;
    }
}
?>