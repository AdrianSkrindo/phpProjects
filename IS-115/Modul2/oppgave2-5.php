<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Lag et script som genererer et «tilfeldig» passord på åtte tegn. Minst ett av tegnene må være et tall og 
minst ett av tegnene må være en stor bokstav. Passordet skal skrives ut på skjermen. -->

<?php 
if (isset($_POST['generate']))
    {
        $stor_bok = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $tall = "0123456789";
        $alle_bok = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrtuvwxyz123456789-+?!";
        //Skriver opp stringene vi ønsker å hente tilfeldige deler fra.
        //En for stor bokstav, en for tall, og en for alle mulige komboer.
        $rand_stor_bok = substr(str_shuffle($stor_bok), 0, 1);
        $rand_tall = substr(str_shuffle($tall), 0, 1);
        $rand_alle_bok = substr(str_shuffle($alle_bok), 0, 6);
        //Bruker "substr" for å hente ut en bestemt del.
        //str_shuffle for blande kombinasjonen, og tallene viser hvor mange tegn av stringen vi ønsker å hente ut.

        $kombiner = "$rand_stor_bok$rand_tall$rand_alle_bok";
        $dobbel_kombiner = substr(str_shuffle($kombiner), 0, 8);
    }
    ?>

<body>
    <h1>Random passord generator</h1>
    <form action="oppgave2-5.php" method="POST">
        <input type="submit" name="generate" value="Opprett passord">
    </form><br>
    <?php error_reporting (0); 
    echo $dobbel_kombiner;
    //Den slet med å finne variabelen $dobbel_kombiner når jeg kjørte koden, 
    //googlet meg frem til at error_reporting satt til 0 fikset det, hvorfor?
    ?>
    <br>
    Ved hjelp av funksjonen sub_str for å hente ut en del av stringen, pluss str_shuffle og 
    "stringer" bestående av alle tall i alfabetet, 
    samt tallene 0-9, var det mulig å velge at vi ønsket minst en stor bokstav og minst et tall. For så å bruke str_shuffle igjen for å få et enda mer tilfeldig passord, med tanke på plasseringen av den store bokstaven og tallet.
    

    
</body>
</html>