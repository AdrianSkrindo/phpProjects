<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Oppgave 5</h1>
    <?php 
    $antall_sekunder = 4400; 
    $divisor1 = 60;
    $divisor2 = 60;

    $hours = ($antall_sekunder/3600) % 24;
    $minutter = ($antall_sekunder/60) % 60;
    $sekunder = $antall_sekunder % 60;
    //Gir variable verdier.?>

    <p>Brukt funksjonen gmdate(). Ved å omdanne 4400 sekunder til timer, minutter og sekunder får vi: 
        <?php echo gmdate("H:i:s", $antall_sekunder); ?>
    </p><br>
    <p>Regnet ut ved hjelp av den aritmetiske operatoren Modulo: <?php echo $hours.":".$minutter.":".$sekunder; ?> </p>


</body>
</html>