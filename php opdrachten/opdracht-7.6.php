<?php
session_start();

if (isset($_POST['submit'])) {
    $number = $_POST['number'];

    if (is_numeric($number) && $number >= 1 && $number <= 10) {
        if (isset($_SESSION['numbers'])) {
            $_SESSION['numbers'][] = $number;
        } else {
            $_SESSION['numbers'] = array($number);
        }
    } else {
        echo "Ongeldig getal. Voer een getal in tussen 1 en 10.";
    }

    $average = array_sum($_SESSION['numbers']) / count($_SESSION['numbers']);
    $average = round($average, 1);
}

echo '<form method="post" action="">';
echo '<label for="number">Cijfer:</label>';
echo '<input type="text" name="number" id="number">';
echo '<input type="submit" name="submit" value="Toevoegen">';
echo '</form>';

echo '<p>Aantal ingevoerde cijfers: ' . count($_SESSION['numbers']) . '</p>';
echo '<p>Gemiddelde: ' . $average . '</p>';
?>