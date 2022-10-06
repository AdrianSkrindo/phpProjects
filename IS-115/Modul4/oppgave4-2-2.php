<?php
//vaskefunksjon fra læreboka, returnerer input $var, etter vask.
function vask($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

//sjekker om regristrerknappen er trykket
if (isset($_REQUEST['registrer'])) {

    $fornavn = vask($_REQUEST['fnavn']);
    $etternavn = vask($_REQUEST['enavn']);

    //Kan også bruker filter_var funksjonen.
    //isset sjekker om registrert knappen er trykket, om den er knyttet kjøres foreach loopen og printer verdiene i indeksene.
    echo "Følgende informasjon er hentet fra skjemaet: <br><br>";
    echo "Fornavn: " . $fornavn . "<br>";
    echo "Etternavn: " . $etternavn . "<br>";

    //filter_var funksjonen, med valgt filter, for å validere emailinput fra skjemaet til brukeren
    if (filter_var($_REQUEST['epost'], FILTER_VALIDATE_EMAIL)) {
        echo "Epost: " . $_REQUEST['epost'];
    } else {
        echo $_REQUEST['epost'] . " har ikke gyldig epost-format!";
    }
    echo "<br>Telefon-nummer: " . $_REQUEST['tlf'] . "<br>";
    echo "Fødselsdato: " . $_REQUEST['fdato'] . "<br>";

    echo "<br>Gratulerer med din nye bruker " . $_REQUEST['fnavn'] . "!";
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
    <!-- Lag et skjema som registrerer en ny bruker i systemet du utvikler. Skjemaet må inneholde all nødvendig 
informasjon om brukeren (f.eks. navn, mobilnr., e-post osv.) og skal gi feilmelding dersom: 
• obligatoriske felt mangler (hvilke felt må vises til brukeren) 
 
Du kan ev. også prøve deg på feilmelding dersom:  
• noen felt er feil utfylt (hvilke felt må vises til brukeren) – ikke krav! 
 
Når  skjemaet  sendes,  skal  data  fra  skjemaet  lagres  i  en  matrise  og  skrives  ut  på  skjermen  på  en 
oversiktlig måte  sammen med beskjed om  at  den nye  brukeren er  registrert.  Normalt ville  vi  lagret 
denne informasjonen i en database, men det skal vi gjøre  litt senere. Lag en video hvor du beskriver og 
demonstrerer koden. -->


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