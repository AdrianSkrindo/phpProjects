<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>I oppgaven under har jeg laget en enkel matrise med indeks-verdiene 0, 3, 5, 7, 8 og 15 og gitt de verdier. <br></p>
    <p>Deretter har jeg printet tallenen både ved hjelp av print_r funksjonen, og ved hjelp av en foreach-løkke</p>
<?php 
    
    /*Lag et lite script som oppretter en matrise med heltall som indeks. Matrisen skal ha indeksene 0, 3, 5, 
    7, 8 og 15. Skriv deretter ut innholdet i matrisen ved hjelp av funksjonen print_r() og ved å bruke en 
    løkke (som du lærte i forrige modul). */
    
    $matrise = array(0 => 10, 3 => 20, 5 => 30, 7 => 40, 8 => 50, 15 => 60); 
    //start-matrise, med fulle elementer, indeks og verdi

    print_r($matrise);
    echo "<br><br>";

    //printer matrisen på skjermen, både nøkkel og verdi
    foreach ($matrise as $indeks => $verdi) { 
    echo $indeks ."=". $verdi."<br>"; 
    }
?>
</body>
</html>