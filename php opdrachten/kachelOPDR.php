<?php
// auteur: Mohamed el B
// functie: zet de kachel aan

// temp -10 - 0 graden: kachel hoge stand
// temp 0-18: kachel normale stand
// temp > 18: kachel uit

// initialisatie van de temperatuur
$temp = 20;

if ($temp <= 0 && $temp >= -10) {
    echo "Hoge stand";
} elseif ($temp <= 18) {
    echo "Normale stand";
} else {
    echo "Kachel uit";
}
?>
