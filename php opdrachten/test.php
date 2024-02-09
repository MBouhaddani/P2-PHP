<?php function BepaalGemiddelde($cijfers) {
    $som = 0;
    $aantal = count($cijfers);
    foreach ($cijfers as $cijfer) {
        $som += $cijfer;
    }
    $gemiddelde = $som / $aantal;
    return $gemiddelde;
}

$cijfers = array(2,3,4);
$gemiddelde = BepaalGemiddelde($cijfers);
echo $gemiddelde;
?>