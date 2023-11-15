<?php 
 // auteur: Mohamed
 // functie: uitleg datum

 //initialiseren
 $datum = '15-11-2023';

 //main 
 
 echo "De datum is: $datum";
 echo "<br>";
 echo "De dag is: ".substr($datum,0,2);
 echo "<br>";   
 echo "tweede manier datum is:" . date("l d F Y", strtotime($datum));
 ?>