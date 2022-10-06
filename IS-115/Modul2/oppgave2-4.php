<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Lag et script som regner ut alderen til en person. Fødselsdatoen oppgis i formatet dd.mm.YYYY. Skriv ut 
alderen på personen på skjermen oppgitt i hele år og dager. -->

<body>
<h1>Utregning av antall dager og år.</h1>
<p>I denne oppgaven har jeg regnet ut antall dager og år mellom to datoer. 23. oktober 2000 og dagens dato.</p><br>


<?php 
$fodselsdag = date("d.m.Y", strtotime("23-10-2000"));
//Date funksjonen, for å opprette formatet jeg ønsker, strtotime, for å gjøre string til datatypen time.
$dagensDato = date("d.m.Y");
$differanse = date_diff(date_create($dagensDato), date_create($fodselsdag));
//date_diff for å returnere de verdien mellom to ulike date objekter

//Bruker format for å omdanne en int verdi til dataformatet vi ønsker (?)
$dagerTotalt = (int) $differanse->format("%a");
$antallAar = (int) $differanse->format("%Y");
$antallDager = $dagerTotalt % 365;
//Modulo operatoren for å finne antall dager igjen etter å ha delt på 365, som altså er alle dagene som forsvinner når vi har trukket fra alle hele år.

?>
    <p>Du er <?php echo $antallAar." år, og ".$antallDager." dager."?></p>
</body>
</html>