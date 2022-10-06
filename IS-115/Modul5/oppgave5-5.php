<?php

//Variabel for orginal string
$utgangspunkt = 'Krypteringsklar';
echo $utgangspunkt;
echo "<br>";
echo "<br>";


//Legger til asdf mellom hver bokstav og printer resultat
$formatted = implode('asdf',str_split($utgangspunkt)); 
echo $formatted;
echo "<br>";
echo "<br>";


//Asdf byttes ut med mellomrom i kryptert tekst
$search = 'asdf' ;
$trimmed = str_replace($search, '', $formatted) ;
echo $trimmed ;

echo "<br><br>";
echo "Din input er:";
if (isset($_REQUEST['trykk'])) {
    echo $_REQUEST['input'];
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
            <input type="submit" name="trykk" value="Submit">
        </form>
    </pre>
</body>
</html>