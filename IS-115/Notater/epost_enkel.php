<?php

$til = "adrianskrlindland@gmail.com";
$emne = "En liten hilsen";
$melding = "Dette er en epost sendt ved hjelp av php, fra Adrian sin maskin";
$fra = "adrianskrlindland@gmail.com";

$mhode = "From: ".$fra. "\r\n".
"Reply-To Spam@pox.no". "\r\n".
"X-mailer: PHP/" . phpversion();
//mail($til, $emne, $melding, $mhode);
?>