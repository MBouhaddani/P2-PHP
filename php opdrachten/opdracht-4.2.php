<?php
$tijd = date('13');

switch ($tijd) {
    case ($tijd >= 6 && $tijd < 12):
        echo "Goedemorgen!";
        break;
    case ($tijd >= 12 && $tijd < 18):
        echo "Goedemiddag!";
        break;
    case ($tijd >= 18 && $tijd < 24):
        echo "Goedenavond!";
        break;
    default:
        echo "Goedenacht!";
        break;
}
?>