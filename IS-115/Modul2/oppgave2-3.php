<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--Matheo  sitter  med  norskleksene.  Han  skal  finne  ut  hvor  mange  ganger  bokstavkombinasjonen  «is» 
forekommer i setningen «Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise.» Lag 
et program som hjelper Matheo. -->

<body>
<h1>Oppgave 3</h1>
<?php 
$setning ="Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise."
?>

<p>Ved hjelp av funksjonen substr_count kan vi finne ut av hvor mange ganger et ord eller en kombinasjonen av bokstaver/tall er nevnt i en tekst.</p>
<p>Funksjonen krever to ulike parametere, først hva vi ønsker å sjekke ut, her laget jeg bare en ny variable som inneholdt teksten oppgitt i oppgaven.</p>
<p>Videre krever den også en string som forteller hvilket ord vi ønsker at den skal søke opp.</p><br>
<p>Ordet is er nevnt <?php echo substr_count($setning, "is")." i teksten oppgitt i oppgaven.";?></p>

</body>
</html>