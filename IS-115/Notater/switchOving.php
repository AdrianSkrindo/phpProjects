<?php
$rolle = "apekatt";

switch ($rolle) {
  case "utleier":
    echo "Velkommen til siden for utleiere!";
    break;
  case "leietaker":
    echo "Velkommen til siden for leietakere!";
    break;
  default:
    echo "Du må logge inn for å bruke systemet vårt.";
}
?>