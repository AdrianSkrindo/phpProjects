<?php

/*Lag en matrise med indeks fra 0-9. Du bestemmer selv innholdet i matrisen. Lag deretter et script som 
endrer  alle  verdiene  i  matrisen  til  noe  annet som  du  selv  bestemmer.  Deretter  skal  du  endre  alle 
indeksene i matrisen slik at hver indeks blir 10 høyere (f.eks. indeks 0 skal nå bli indeks 10 osv.).  Hint: 
sjekk ut innebygde funksjoner i PHP for dette. */

$rekke = array(0,1,2,3,4,5,6,7,8,9
);

echo "<pre>";
print_r($rekke);
echo "</pre><br><br>";
echo "Foreach løkke med start-tallene:<br>";

foreach($rekke as $key => $value){
    echo $value."<br>";
}

foreach($rekke as &$value2){
    $value2 = rand(1,100);
}

echo "Foreach løkke etter at starttallene er endret:<br>";
foreach($rekke as $key => $value){
    echo $value."<br>";
}


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