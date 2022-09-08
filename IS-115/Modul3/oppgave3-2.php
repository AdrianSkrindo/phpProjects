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
    $total = 0;
    for($x=0; $x < 10; $x++){
        echo "$x <br>";
        $total +=$x;
    };

    echo "<br>Ferdig å telle! Summen av tallene ble $total";


    ?>
</body>
</html>