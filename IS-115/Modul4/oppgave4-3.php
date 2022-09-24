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
        /*$data = $_REQUEST;
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        echo "Brukeropplysningene ble endret!";*/
        echo "Fornavn: ". $_REQUEST['fnavn']."<br>";
        echo "Etternavn: ". $_REQUEST['enavn']."<br>";
        if(filter_var($_REQUEST['epost'], FILTER_VALIDATE_EMAIL)){
            echo "Epost: ".$_REQUEST['epost'];
        }else{
            echo $_REQUEST['epost']." har ikke gyldig epost-format!";
        }
        echo "<br>Telefon-nummer: ".$_REQUEST['tlf']."<br>";
        echo "Fødselsdato: ".$_REQUEST['fdato']."<br>";

        echo "<br>Brukeropplysningene dine ble endret!";
    }
    else {
        echo "Fornavn: ". $data['fnavn']."<br>";
        echo "Etternavn: ". $data['enavn']."<br>";
        if(filter_var($data['epost'], FILTER_VALIDATE_EMAIL)){
            echo "Epost: ".$data['epost'];
        }else{
            echo $data['epost']." har ikke gyldig epost-format!";
        }
        echo "<br>Telefon-nummer: ".$data['tlf']."<br>";
        echo "Fødselsdato: ".$data['date']."<br>";
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
      Fornavn: <input type="text" name="fnavn" value="<?php if (array_key_exists('fnavn', $_REQUEST)){echo $_REQUEST['fnavn'];}else{echo $data['fnavn'];}?>" required><br>
      Etternavn: <input type="text" name="enavn" value="<?php if (array_key_exists('enavn', $_REQUEST)){echo $_REQUEST['enavn'];}else{echo $data['enavn'];}?>" required><br>
      E-post: <input type="email" name="epost" value="<?php if (array_key_exists('epost', $_REQUEST)){echo $_REQUEST['epost'];}else{echo $data['epost'];}?>" required><br>
      Telefon: <input type="tel" name="tlf"  value="<?php if (array_key_exists('tlf', $_REQUEST)){echo $_REQUEST['tlf'];}else{echo $data['tlf'];}?>" required><br>
      Fødselsdato: <input type="date" name="fdato" value="2001-05-05"><br>
      <input type="submit" name="registrer" value="Registrér">
    </form>

</pre>


</body>
</html>