<?php 
// auteurs: Mohamed el B
// functie: uitleg for loop

// for loop

for ($teller = 10; $teller < 100; $teller=$teller+10) {
    echo "$teller" . "<br>";
}   


$a = 10;
while ($a <= 10) {
    echo "$a" . "<br>";
    if ( $a >= $teller)
    {$a++;  $a = $a + 10;}
} 

if ($a >= 10 )
{$a+= 10; $a = $a + 10;}
else {$a++; $a = $a + 1;}
?>

