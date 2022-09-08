<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 5</h1>

    <!-- Tenk deg et sjakkbrett med hvetekorn på. For hver rute på brettet, fordobler du antall hvetekorn. For 
    eksempel: rute 1 har ett hvetekorn, rute 2 har to hvetekorn, rute 3 har fire hvetekorn og så videre. Lag 
    et script som viser antall hvetekorn for hver eneste rute på sjakkbrettet.  Når antall hvetekorn passerer 
    én milliard, skal tallet vises tekstuelt. For eksempel: 1 milliard, 73 millioner, 741 tusen, 8 hundre og 24.  -->

    <?php 
    
    $korn = 1;
    for ($i = 1; $i <= 64; $i++) {
    
        $korn = 2**($i-1) * 1;
        
        if ($korn > 1000000000){
            $milliarder = $korn/1000000000;
            $millioner = $milliarder%1000000;
            $tusner = $millioner%1000;
            $hundre = $tusner%100;
            $enere = $hundre%1; 
            echo "Rute ".$i.": ".$milliarder." milliarder, ".$millioner." millioner, ".$tusner." tusen, ".$hundre." hundre, og ".$enere."<br>";
        } else {
            echo "Rute ".$i.": ".$korn."<br>";
        }

    }



        
    

    ?>

</body>
</html>