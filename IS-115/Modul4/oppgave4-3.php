<?php

/*Lag et script som simulerer en endring av en brukeroppføring. For å gjøre dette må du lage en matrise 
med  den  nødvendige  informasjonen  i  begynnelsen. Deretter  skal  skjemaet  vise  den  eksisterende 
informasjonen om brukeren i skjemaet. Dersom skjemaet sendes, skal informasjonen lagres i matrisen. 
Om du ønsker å gjøre løsningen ekstra elegant kan du først sjekke om det er  gjort noen endringer før 
informasjonen skrives til  matrisen. Brukeren må  få  beskjed om  at  brukeroppføringen er endret.  De 
samme reglene  for  feilmelding  som i  skjemaet  i  oppgave 4  gjelder  også her.   Lag  en  video  hvor du 
beskriver og demonstrerer koden. */
$data = array(
    'fnavn' => 'Adrian',
    'enavn' => 'Lindland',
    'epost' => 'adrian@gmail.com',
    'tlf' => '98116931',
    'date' => '2001-05-05'
);

if(isset($_REQUEST['registrer']))
    {
        $data = $_REQUEST;
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        echo "Brukeropplysningene ble endret!";
    }
    else {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
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
      Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" required><br>
      Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
      E-post: <input type="email" name="epost" placeholder="E-post" required><br>
      Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer" required><br>
      Fødselsdato: <input type="date" name="fdato" value="2001-05-05"><br>
      <input type="submit" name="registrer" value="Registrér">
    </form>

</pre>


</body>
</html>