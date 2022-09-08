<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- Lag et script som fjerner potensiell HTML- og PHP-kode fra et etternavn. Det behandlede navnet skal 
skrives ut på skjermen. -->
<body>

    <h1>Oppgave 2</h1>

    <?php $eks_string = "Her har <b>jeg fjernet eventuelle</b> html/php kode fra setningen."?>
    <p>Her benytter jeg meg av funksjonen strip_tags(), som gjør slik at alt form for php eller html formetering forsvinner. </p><br>
    <p>Før: <?php echo $eks_string; ?></p>
    <p>Etter: <?php echo strip_tags($eks_string); ?></p>

</body>
</html>