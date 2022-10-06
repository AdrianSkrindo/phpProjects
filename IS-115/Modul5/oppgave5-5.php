<?php

function krypter($var){

    return $var;
}

function dekrypter($var){

    return $var;
}


if (isset($_REQUEST['krypter'])) {
   
} elseif (isset($_REQUEST['dekrypter'])) {
   
} else {
    echo "Fyll inn ord som skal krypteres, eller dekyrpteres;";
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
      Input: <input type="text" name="input" placeholder="Tekst du ønsker å kryptere" required><br>
      <input type="submit" name="krypter" value="Krypter"><br>
      <input type="submit" name="dekrypter" value="Dekrypter">
    </form>

</pre>

</body>

</html>