<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>opdracht 2 </h1>
<form method="post">
        <label for="num1">Getal 1:</label>
        <input type="text" name="num1" required>
 
        <label for="num2">Getal 2:</label>
        <input type="text" name="num2" required>
 
        <br>
 
        <input type="radio" name="operator" value="add" checked> Optellen
        <input type="radio" name="operator" value="subtract"> Aftrekken
        <input type="radio" name="operator" value="multiply"> Vermenigvuldigen
        <input type="radio" name="operator" value="divide"> Delen
 
        <br>
 
        <input type="submit" name="calculate" value="Bereken">
    </form>
 
 
    <?php
    // Verwerking van het formulier
    if (isset($_POST['calculate'])) {
        // Controleer of de formuliervariabelen zijn ingesteld
        if (isset($_POST['num1'], $_POST['num2'], $_POST['operator'])) {
            // Invoer ophalen
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operator = $_POST["operator"];
 
            // Controleer of de ingevoerde waarden numeriek zijn
            if (is_numeric($num1) && is_numeric($num2)) {
                // Bereken de uitkomst
                switch ($operator) {
                    case "add":
                        $resultaat = $num1 + $num2;
                        break;
                    case "subtract":
                        $resultaat = $num1 - $num2;
                        break;
                    case "multiply":
                        $resultaat = $num1 * $num2;
                        break;
                    case "divide":
                        if ($num2 != 0) {
                            $resultaat = $num1 / $num2;
                        } else {
                            $resultaat = "Kan niet delen door nul.";
                        }
                        break;
                    default:
                        $resultaat = "Ongeldige operator.";
                }
 
                // Toon het resultaat
                echo "<p>Resultaat: " . $resultaat . "</p>";
            } else {
                echo "<p style='color: red;'>Vul geldige numerieke waarden in voor getal 1 en getal 2.</p>";
            }
        }
    }
    ?>
</body>
</html>