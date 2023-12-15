<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>opdracht 7.3 </h1>
<form method="post">
<input type="radio" id="wit" name="color" value="wit" required>
    <label for="wit">wit</label><br>
    <input type="radio" id="red" name="color" value="red" required>
    <label for="red">Red</label><br>
    <input type="radio" id="green" name="color" value="green" required>
    <label for="green">Green</label><br>
    <input type="radio" id="blue" name="color" value="blue" required>
    <label for="blue">Blue</label><br>
    <input type="submit" name="submit" value="Submit">
   
</form>
 
<?php
    if (isset($_POST['submit'])) {
        $color = $_POST['color'];
        echo "<script>document.body.style.backgroundColor = '$color';</script>";
    }
?>
</body>
</html>