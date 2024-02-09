<?php
$tijd = date('13');

if ($tijd >= 6 && $tijd < 12) {
    echo "Goedemorgen!";
} elseif ($tijd >= 12 && $tijd < 18) {
    echo "Goedemiddag!";
} elseif ($tijd >= 18 && $tijd < 24) {
    echo "Goedenavond!";
} else {
    echo "Goedenacht!";
}
?>