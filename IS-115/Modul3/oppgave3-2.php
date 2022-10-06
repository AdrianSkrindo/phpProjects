<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 2</h1>

    <?php 

    //en for loop, setter x=0 inni loopen, og sier at hver gang x er mindre enn 10 at den skal printe x
    //legger sammen alle tidligere x'er ved hjelp += operator inn i variabelen total, og printer total etter loopen. 
    $total = 0;
    for($x=0; $x < 10; $x++){
        echo "$x <br>";
        $total +=$x;
    };

    //printer verdien av for-loopen.
    echo "<br>Ferdig å telle! Summen av tallene ble $total";


    ?>
</body>
</html>