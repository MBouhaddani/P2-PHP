<?php
 
// connect database
include "connect.php";
 
// maak een query
$sql = "select * FROM fietsen";
// preparee query
$stmt = $conn->prepare($sql);
// uitvoeren
$stmt-> execute();
// ophalen alle data
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
 
 
 
// printe de data rij voor rij
echo "<br>";
 
echo "<table border=1px>";
foreach ($result as $row) {
    echo "<tr>";

 
    echo "<td>". $row['merk'] . "</td>";
    echo "<td>". $row['type'] . "</td>";
    echo "<td>". $row['prijs'] . "</td>";
    echo "<td>'" . "<img src='blokbuster.jpeg" . $row['Foto'] . "' alt=''></td>";      echo "<br>";
    echo "<br>";

}
echo "</table>";