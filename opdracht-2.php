<?php
//* Auteur: Mohamed B
//* Datum: 17-11-2023
//* functie: datum en tijd

$datum = date('Y-m-d H:i:s');
echo "Het is vandaag: $datum.";
echo "<br>";

$dagVanHetJaar = date('z') + 1;
echo "Vandaag is het de $dagVanHetJaar'e dag van het jaar.";
echo "<br>";

$dagVanDeWeek = date('l');
$nummerDagVanDeWeek = date('N');
echo $dagVanDeWeek . " is de " . $nummerDagVanDeWeek . "e dag van de week.";
echo "<br>";

$maandNaam = date('F');
$aantalDagen = date('t');
echo "De maand " . $maandNaam . " heeft in totaal " . $aantalDagen . " dagen.";
echo "<br>";

function isLeapYear($year) {
    return ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0));
}

$jaar = date("Y");
if (isLeapYear($jaar)) {
    echo "Het jaar " . $jaar . " is een schrikkeljaar.";
} else {
    echo "Het jaar " . $jaar . " is geen schrikkeljaar.";
}
echo "<br>";
?>
