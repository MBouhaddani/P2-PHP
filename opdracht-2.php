<?php

 $datum=date("l j F Y");

 echo "Het is vandaag: $datum.";

 echo"<br>";

 $dagVanHetJaar = date('z') ;
 
 echo "Vandaag is het de $dagVanHetJaar'e dag van het jaar.";

echo"<br>";

$dagVanDeWeek = date('l');  $nummerDagVanDeWeek = date('N');

echo $dagVanDeWeek . " is de " . $nummerDagVanDeWeek . "e dag van de week.";

echo"<br>";
$maandNaam = date('F'); 

$aantalDagen = date('t');

echo "De maand " . $maandNaam . " heeft in totaal " . $aantalDagen . " dagen.";

echo"<br>";



echo "Het jaar 2021 is geen schrikkeljaar.";



?>