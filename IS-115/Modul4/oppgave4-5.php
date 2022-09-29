<?php
/*Lag en  liten konkurranse mellom ti  deltakere. En matrise skal inneholde navnene til  deltakerne (som 
indeks) og poengsummen de får i hver runde (som verdi). Før konkurransen starter, må alle deltakerne 
annonseres. Konkurransen foregår i flere runder inntil det kun er én deltaker igjen. Prosedyren i hver 
runde er som følger: 
• det skal trekkes et tall mellom 1 og 50 for hver deltaker som lagres i matrisen  
• deltakeren med lavest poengsum skal fjernes fra konkurransen (og dermed fra matrisen)  
o dersom flere deltakere har den laveste poengsummen, skal alle disse fjernes  
• navnet på den eller de som fjernes skal opplyses i hver runde 
 
Når det er én deltaker igjen, skal navnet på vinneren annonseres.  
*/

$deltakere = array(
    array('Adrian', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
    array('Simen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
    array('Emanuel', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
    array('Kenny', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
    array('Kevin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
    array('Sondre', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
    array('Peter', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
    array('Markus', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
    array('Ulrik', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
    array('Steffen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
);

echo "<pre>";
print_r($deltakere);
echo "</pre>";



foreach($deltakere as $navn => $poeng){
    echo $navn." har ".$poeng." poeng.<br>";
}


//Lage en matrise for hver runde, returnere verdien av indeksen på den som scorer lavest, for så å trekke fra i neste matrise?
/*
foreach($deltakere as &$poeng){
    $poeng = rand(1,50);
}

asort($deltakere);

echo "<br>";
foreach($deltakere as $navn => $poeng){
    echo $navn." har ".$poeng." poeng.<br>";
}

$fjernet = array_shift($deltakere);

echo "<br>";
echo $fjernet." hadde minst poengsum, og ryker dermed ut av konkurransen!";
foreach($deltakere as $navn => $poeng){
    echo $navn." har ".$poeng." poeng.<br>";
}*/



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