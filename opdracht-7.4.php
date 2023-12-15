<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>opdracht 7.4 </h1>
 
 <form method="post">
         <label for="bedrag">Geldbedrag:</label>
         <input type="text" name="bedrag" required>
  
         <label for="korting">Kortingspercentage:</label>
         <input type="text" name="korting" required>
  
         <br>
  
         <input type="submit" name="uitrekenen" value="Uitrekenen">
     </form>
  
     <?php
     // Verwerking van het formulier
     if (isset($_POST['uitrekenen'])) {
         // Invoer ophalen
         $bedrag = $_POST['bedrag'];
         $kortingPercentage = $_POST['korting'];
  
         // Korting berekenen
         $kortingBedrag = $bedrag * ($kortingPercentage / 100);
         $totaalBedrag = $bedrag - $kortingBedrag;
  
         // Resultaat weergeven
         echo "<p>bedrag inclusief korting: €" . number_format($totaalBedrag, 2) . "</p>";
     }
     ?>
</body>
</html>