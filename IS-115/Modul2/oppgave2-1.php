<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--Lag et script som sørger for at et etternavn blir gjort om til stor forbokstav og at resten av etternavnet 
har  små  bokstaver.  Det  behandlede  navnet  skal  skrives  ut  på  skjermen.  Skriv  også  ut  hvor  langt 
etternavnet er. -->
<body>
    <h1>Oppgave 1</h1>
<?php
    $fornavn = "adrian";
    $etternavn = "lindland";
?>
<p>Først bare echo de to variablene $fornavn og $etternavn: <?php echo $fornavn." ".$etternavn;?></p>
<p>Ved å kalle på funksjonen ucfirst() vil vi kunne endre slik at vi får et ord med stor forbokstav og resten små. Funksjonen strtoupper vil omdanne hele ordet til bare store bokstaver. </p><br>
<p>For å telle bokstaver i en string, benytter jeg meg av funksjonen strlen(). </p><br>
<p>Mitt navn er <?php echo ucfirst($fornavn)." ".ucfirst($etternavn); ?></p>
<p>Mitt etternavn består av <?php echo strlen($etternavn); ?> bokstaver. </p>
    
</body>
</html>