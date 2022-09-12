<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--Skriv et program som ber om startsaldo S0 og rente. Programmet skal beregne ny saldo S1 etter ett år 
inkludert renter og skrive S1 ut på skjermen. Utvid programmet med en løkke, slik at saldo Sn etter en 
periode på n år kan beregnes. Skriv ut ny saldo for hvert år og Sn etter n år.  -->

    <h1>Oppgave 3</h1>

   <?php 
   
    $i = ""; //år
    $saldo = 250000;

    for ($i = 0; $i <= 10; $i++) {
        $saldo = $saldo*1.05;
        echo "Etter ".$i." år, er saldo på konto ".$saldo."kr.<br>";

    }

    ?>

</body>
</html>