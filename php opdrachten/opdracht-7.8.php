<?php
session_start();

if (isset($_POST['submit'])) {
  $fruit = $_POST['fruit'];

  if (!empty($fruit)) {
    if (isset($_SESSION['fruits'])) {
      $_SESSION['fruits'][] = $fruit;
    } else {
      $_SESSION['fruits'] = array($fruit);
    }
  }

  if ($_POST['submit'] == 'Sorteren') {
    sort($_SESSION['fruits']);
  }

  if ($_POST['submit'] == 'Schudden') {
    shuffle($_SESSION['fruits']);
  }
}

echo '<form method="post" action="">';
echo '<label for="fruit">Fruitsoort:</label>';
echo '<input type="text" name="fruit" id="fruit">';
echo '<input type="submit" name="submit" value="Toevoegen">';
echo '<input type="submit" name="submit" value="Sorteren">';
echo '<input type="submit" name="submit" value="Schudden">';
echo '</form>';

echo '<p>Inhoud van de array:</p>';
echo '<ul>';
if (isset($_SESSION['fruits'])) {
  foreach ($_SESSION['fruits'] as $fruit) {
    echo '<li>' . $fruit . '</li>';
  }
}
echo '</ul>';
?>