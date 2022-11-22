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
    /* File meta data */
    $dir = "files/";
    $filename = "m9.txt";

    /* No directory with that name? */
    if(!file_exists($dir)) 
    {
        if (!mkdir($dir, 0777, true)) 
            die("Cannot create directory..." . $dir);
    }
    
    /* File handler */
    $fh = fopen($dir . $filename, "w");

    /* File data */
    $txt  = "Data was written to file: " . date('d.m.Y k\l. H:i') . " \r\n";
    $txt .= "Filename: " . $dir . $filename . " \r\n";
    
    if($r = fwrite($fh, $txt))
        echo $r . " bytes were written to file " . $filename . ".";
    else
        echo "An error occured.";

    fclose($fh);
?>


</body>
</html>