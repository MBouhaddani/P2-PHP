<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $getal = $_POST['getal'] ?? '';
    $isNumber = is_numeric($getal);

    if ($isNumber) {
        echo "Het is een getal: " . $getal . "<br>";
    } else {
        echo "Het is geen getal <br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Check getal</h1>
    <form action="" method="post">
        <input type="text" name="getal" id="getal">
        <br>
        <input type="submit" value="Check" name="knop">
    </form>
</body>
</html>