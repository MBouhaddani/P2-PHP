<?php
if (isset($_POST["knop"])) {
    $dennis = $_POST["dennis"];
    $henk = $_POST["henk"];
    echo "dennis: $dennis";
    echo "<br>";
    echo "henk: $henk";
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
<h1>action</h1>
<form method="POST" action="form.php">
    <?php
    // Import the necessary variables from form.php
    if (isset($_POST["ingevuld"])) {
        $dennis = $_POST["ingevuld"];
    } else {
        $dennis = "";
    }
    ?>
    <input type="text" name="ingevuld" value="<?php echo $dennis;?>">
    <button type="submit" name="action_btn" value="stuur terug">verzenden</button>
</form> 
</body>
</html>