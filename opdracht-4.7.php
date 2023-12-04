<?php
$spaargeld = 750; // Example value, you can change it

if ($spaargeld < 1000) {
    $tekort = 1000 - $spaargeld;
    if ($tekort > 250) {
        echo "Je hebt een tekort van €$tekort. Je kunt beter een baantje zoeken.";
    } else {
        echo "Je bent er bijna! Je hebt een tekort van €$tekort.";
    }
} else {
    $over = $spaargeld - 1000;
    echo "Gefeliciteerd! Je kunt de telefoon kopen. Je hebt nog €$over over voor een hoesje.";
}
?>
