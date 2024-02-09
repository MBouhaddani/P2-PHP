<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $filter = $_POST['filter'];

    switch ($filter) {
        case 'upper':
            $text = strtoupper($text);
            break;
        case 'lower':
            $text = strtolower($text);
            break;
        case 'sentence':
            $text = ucfirst($text);
            break;
        case 'word':
            $text = ucwords($text);
            break;
    }

    echo "<p>$text</p>";
}

echo '<form method="post" action="">';
echo '<label for="text">Tekst:</label>';
echo '<input type="text" name="text" id="text">';
echo '<br>';
echo '<input type="radio" name="filter" id="upper" value="upper">';
echo '<label for="upper">In hoofdletters</label>';
echo '<br>';
echo '<input type="radio" name="filter" id="lower" value="lower">';
echo '<label for="lower">In kleine letters zonder hoofdletters</label>';
echo '<br>';
echo '<input type="radio" name="filter" id="sentence" value="sentence">';
echo '<label for="sentence">Eerste letter van zin hoofdletter</label>';
echo '<br>';
echo '<input type="radio" name="filter" id="word" value="word">';
echo '<label for="word">Eerste letters van ieder woord hoofdletter</label>';
echo '<br>';
echo '<input type="submit" name="submit" value="Verzenden">';
echo '</form>';
?>