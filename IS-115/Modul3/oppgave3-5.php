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
    
    //FOr-loop for å bestemme at vi skal regne ut fra rute 1 til rute 64. Med en post-increment. 

    $korn = 1;
    for ($i = 1; $i <= 64; $i++) {
    
        $korn = 2**($i-1) * 1;  //Den matematiske utregning for antall hvetekorn pr rute.
        
        //med en gang antall korn passerer 1mrd, starter ifsetning for utskrvning av tallene.
        if ($korn > 1000000000){

            $milliarder = $korn/1000000000;
            $milliarder = number_format($milliarder, 0, '.', ''); //number_format for å bestemme hvordan vi ønsker at tallen skal formateres
            $millioner = ($korn-$milliarder)/1000000;
            $millioner = substr(strval(number_format($millioner, 0)), 3); //
            $tusner = ($korn-$milliarder-$millioner)/1000;
            $tusner = substr(strval(number_format($tusner, 0)), 6);
            $hundre = ($korn-$milliarder-$millioner-$tusner)/100;
            $hundre = substr(strval(number_format($hundre, 0)), 9);
            $enere = ($korn-$milliarder-$millioner-$tusner-$hundre)/1;
            $enere = substr(strval(number_format($enere, 0)), 12);
            echo "Rute ".$i.": ".$milliarder." milliarder, ".$millioner." millioner, ".$tusner." tusen, ".$hundre." hundre, og ".$enere." enere"."<br>";


        
        } else {
            echo "Rute ".$i.": ".$korn."<br>";
        }

    }



        
    

    ?>

</body>
</html>