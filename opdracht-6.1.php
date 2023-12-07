<?php 

session_start();

if (!isset($_SESSION['teller'])) {
    
    echo "Session bestaat niet";
    $_SESSION['teller'] = 0;
    $_SESSION['username'] = "piet";
} else { 
    echo "Session bestaat<br>";

    
    $_SESSION['teller']++;
}

echo $_SESSION['teller'];

?>