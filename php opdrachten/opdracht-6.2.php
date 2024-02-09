<?php
session_start();
if(isset($_SESSION['count'])) {
    $_SESSION['count'] += 1;
} else {
    $_SESSION['count'] = 1;
}
setcookie("total_count", $_SESSION['count'], time()+3600);
echo "Je hebt deze pagina ".$_SESSION['count']." keer bezocht in deze sessie en in totaal ".$_COOKIE['total_count']." keer.";
?>
