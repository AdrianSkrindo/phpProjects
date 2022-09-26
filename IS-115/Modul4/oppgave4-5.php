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
    'Adrian' => 0,
    'Simen' => 0,
    'Emanuel' => 0,
    'Kenny' => 0,
    'Kevin' => 0,
    'Sondre' => 0,
    'Peter' => 0,
    'Markus' => 0,
    'Ulrik' => 0,
    'Steffen' => 0
);

echo "Velkommen til denne konkurransen!<br><br>";
for ($x = 1; $x <= 9; $x++) {

    echo "RUNDE ".$x."!<br>";
    /*foreach ($deltakere as $navn => $poeng) {
        echo $navn . " har " . $poeng . " poeng.<br>";
    }*/

    echo "<br>TALLENE TREKKES!<br>";

    foreach ($deltakere as &$poeng) {
        $poeng = rand(1, 50);
    }

    asort($deltakere);

    echo "<br>";
    foreach ($deltakere as $navn => $poeng) {
        echo $navn . " har " . $poeng . " poeng.<br>";
    }

    //bruker array_flip for å bytte plass på nøkkler og verdier.

    //slik at ved array_shift, som returnerer første verdien i rekke,
    //får jeg nøkkelen til $deltaker, altså navnet og ikke verdien til spilleren.
    $flipped = array_flip($deltakere);
    $fjernet = array_shift($flipped);

    unset($deltakere[$fjernet]);

    echo "<br>";
    echo $fjernet . " hadde minst poengsum, og ryker dermed ut av konkurransen!<br><br>";
    /*foreach($deltakere as $navn => $poeng){
    echo $navn." har ".$poeng." poeng.<br>";
}*/

   /* echo "<pre>";
    print_r($deltakere);
    echo "</pre>";*/

    if (count($deltakere) <= 1) {
        echo $navn . " er eneste spiller igjen, og har vunent konkurransen!";
    }
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