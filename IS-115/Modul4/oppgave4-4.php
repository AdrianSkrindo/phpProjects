<?php

/*Lag en matrise med indeks fra 0-9. Du bestemmer selv innholdet i matrisen. Lag deretter et script som 
endrer  alle  verdiene  i  matrisen  til  noe  annet som  du  selv  bestemmer.  Deretter  skal  du  endre  alle 
indeksene i matrisen slik at hver indeks blir 10 høyere (f.eks. indeks 0 skal nå bli indeks 10 osv.).  Hint: 
sjekk ut innebygde funksjoner i PHP for dette. */


$rekke = array(range(0,9));
echo "<pre>";
print_r($rekke);
echo "</pre>";


//Lager en array med nye verdier, bruker array_replace til å erstatte inneholdet i $rekke arrayen
$nyeVerdier = array("En", "To", "Tre", "Fire", "Fem", "Seks", "Syv", "Åtte","Ni", "Ti");
$rekke2 = array_replace($rekke, $nyeVerdier);
echo "<pre>";
print_r($rekke2);
echo "</pre>";

//Legger en ny startindex på 10. Bruker array combine til å slå sammen disse og få en ny array som heter $base3
$newStartIndex = 10;
$rekke3 = array_combine(range($newStartIndex, count($rekke2) + ($newStartIndex-1)),array_values($rekke2));

echo "<pre>";
print_r($rekke3);
echo "</pre>";




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>