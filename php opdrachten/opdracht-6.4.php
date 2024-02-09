<?php
function calculateCircle($radius) {
    $pi = 3.14;
    $omtrek = 2 * $pi * $radius;
    $oppervlakte = $pi * pow($radius, 2);
    return array($omtrek, $oppervlakte);
}

$radius = 5;
list($omtrek, $oppervlakte) = calculateCircle($radius);
echo "Voor een cirkel met straal ".$radius.":<br>";
echo "Omtrek: ".$omtrek."<br>";
echo "Oppervlakte: ".$oppervlakte;
?>
