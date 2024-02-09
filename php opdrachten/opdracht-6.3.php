<?php
$random_postcode = mt_rand(1000, 9999).' '.chr(mt_rand(65, 90)).chr(mt_rand(65, 90));
echo "Willekeurige postcode: ".$random_postcode;
?>
