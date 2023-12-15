<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>opdracht 7.1 </h1>
    <form method='post'>
        <p>
            Bedrag exclusief BTW
        <input type='text' name='bedrag' placeholder='bedrag' value='' >
        </p>
        <input type='radio' name='BTW' placeholder='BTW' value='negen' >laag, 9 %
        <input type='radio' name='BTW' placeholder='BTW' value='eenentwintig' >hoog, 21 %
        <p><input type='submit' name='omzetten' value='omzetten'></p>
    </form>
 
    <?php
    if (isset($_POST['omzetten'])) {
        // validate bedrag
        if (strlen($_POST['bedrag']) == 0) {
            echo "Error: bedrag is niet ingevuld<br>";
        } elseif (filter_var($_POST['bedrag'], FILTER_VALIDATE_FLOAT) == false) {
            echo "Error: bedrag is niet ok<br>";
        } else {
            // Getal is ok
            echo "Het geposte bedrag is: " . $_POST['bedrag'] . "<br>";
        }
        // check of BTW is aangeklikt
        if (isset($_POST['BTW']) == true) {
            // Bereken de BTW
            echo "Uitkomst BTW-berekening";
        } else {
            echo "BTW niet aangeklikt<br>";
        }
    }
    ?>
</body>
</html>