<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php 
    define("gjester", 12);
    $muntligInv = 1;
    $kvinner = gjester/2;
    $tjuåringer = gjester/3;
    $tvillinger = gjester/6;
    echo "Antall med skriftelig invitasjon er: ".gjester - $muntligInv;
    echo "<br>";
    echo "Kvinner: ".$kvinner;
    echo "<br>";
    echo "Ikke i 20-årene: ".gjester-$tjuåringer;
    echo "<br>";
    echo "Antall tvillinger er: ".$tvillinger;


    ?>

</body>
</html>