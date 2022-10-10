<?php

//inkludere funksjone fra seperate filer
include 'krypter.php';
include 'dekrypter.php';

//sjekker hvilken knapp som er trykket, hva brukereren ønsker å gjøre med 
if (isset($_REQUEST['krypter'])) {
    echo "Din input kryptert er: " . krypter($_REQUEST['input']);
}

if (isset($_REQUEST['dekrypter'])) {
    echo "Din input dekryptert er: " . dekrypter($_REQUEST['input']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <form method="post" action="">
            Input: <input type="text" name="input" placeholder="Input" required><br>
            <input type="submit" name="krypter" value="Krypter">
            <input type="submit" name="dekrypter" value="Dekrypter">
        </form>
    </pre>
    <p>Prøv å dekryptere denne: Gcnqorcnqoacnqotcnqoucnqolcnqoecnqorcnqoecnqorcnqo,cnqo cnqovcnqoecnqolcnqolcnqoycnqokcnqokcnqoecnqotcnqo cnqodcnqoecnqokcnqorcnqoycnqopcnqotcnqoecnqorcnqoicnqoncnqogcnqo!</p>
</body>

</html>