<?php
if (isset($_POST["action.php"])) {
    $value_dennis = $_POST["ingevuld"];
} else {
    $value_dennis = "100";
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
   <form method="POST" action="action.php">
    <input type="text" name="denis" value="100" required>
    <br>
    <br>
    <input type="text" name="henk" value="AA" required>
    
    <button type="submit" name="knop" value="verzenden">verzenden</button>
</form> 
</body>
</html>
