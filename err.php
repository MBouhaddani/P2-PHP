<?php 

//auteur: Mohamed B
//fumctie: array

$cijfers[0]= 5;
$cijfers[1]= 7;
$cijfers = array(2,6,"piet");
$aantal = count($cijfers);
echo "aantal cijfers: $aantal <br>";



for($i=0; $i<3; $i++) {
echo "$cijfers[$i] <br>";
}

?>