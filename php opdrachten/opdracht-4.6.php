<?php

// Huidige uur
$date = date('H:i');

// Temperatuur en luchtvochtigheid (zelf invoeren)
$temperature = 25; // Vervang dit met de ingevoerde temperatuur
$humidity = 80; // Vervang dit met de ingevoerde luchtvochtigheid

// Controleer of de airco uit moet
if ($date >= '17:00' || ($temperature < 20 && $humidity < 85)) {
    echo "Airco is uitgeschakeld.";
} else {
    echo "Airco is ingeschakeld.";
}
?>
