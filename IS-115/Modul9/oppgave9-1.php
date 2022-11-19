<?php

/*$file = "demo.txt";
$file = fopen($file, 'r');
$filedata = fread($file, 300); 

echo $file;
echo "<br>";
echo $filedata;*/

$str = file_get_contents('demo.txt
') or die ('ERROR: kan ikke finne filen');

echo $str;

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
    
</body>
</html>