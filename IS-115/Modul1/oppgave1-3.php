<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 3</h1>
<?php
$alder = 21;
$navn = "Adrian";
//Gir variable verdier. 
?>

<p>Tabell</p>
<table style= "width: 30%">
    <tr>
        <th>Navn</th>
        <th>Alder</th>
    </tr>
    <tr>
        <td><?php echo $navn;?></td>
        <td><?php echo $alder;?></td>
    </tr>
</table><br>
<p>Punktmerket liste</p>
<ul>
    <li><?php echo $navn.", ".$alder;?></li>

</ul><br>
<p>Nummerert liste</p>
<ol>
    <li><?php echo $navn.", ".$alder;?></li>

</ol><br>
<p>Paragraf</p>
<p><?php echo $navn.", ".$alder;?></p>

</form>
</body>
</html>