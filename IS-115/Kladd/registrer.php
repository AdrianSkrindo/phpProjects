<?php

if(isset($_REQUEST['registrer']))
    
    echo "Innhold i skjemaet fra brukeren er:<br>";     
    echo "Navn: ".$_REQUEST['fnavn']." ".$_REQUEST['enavn']."<br>";
    echo "Epost: ".$_REQUEST['epost']."<br>";
    echo "Telefon: ".$_REQUEST['tlf']."<br>";
    echo "Fødsel-dato: ".$_REQUEST['fdato']."<br>";

    foreach($_REQUEST as $key => $value)
    {
        echo $key . ": " . $value . "<br>";
    }
    

?>


<html>
  <head>
    <title>Registrering av bruker</title>
  </head>
<body>

<pre>
    <form method="post" action="">
      Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" required><br>
      Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
      E-post: <input type="email" name="epost" placeholder="E-post"><br>
      Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer"><br>
      Fødselsdato: <input type="date" name="fdato" value="2001-05-05"><br>
      <input type="submit" name="registrer" value="Registrér">
    </form>

</pre>

</body>
</html>