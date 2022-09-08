<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--Lag  et  script  som  skriver  ut  en  beskjed  til  brukeren  basert  på  hvilket  fylke  en  kommune tilhører. 
Kommunene som skal sjekkes er: Kristiansand, Lillesand, Birkenes, Harstad, Kvæfjord, Tromsø, Bergen, 
Trondheim, Bodø og Alta. Beskjeden skal se  noe slik  ut: «[kommune] ligger i  [fylke]  fylke». Teksten i 
klammeparentes må erstattes med det respektive kommunenavnet som sjekkes.  -->
    <h1>Oppgave 4</h1>

    <?php
        $by = "Kvæfjord";

        $riktigFylke = match ($by) {
            "Kristiansand" => "Agder",
            "Lillesand" => "Agder",
            "Birkenes" => "Agder",
            "Harstad" => "Troms og Finnmark",
            "Kvæfjord" => "Troms og Finnmark",
            "Tromsø" => "Troms og Finnmark",
            "Bergen" => "Vestland",
            "Trondheim" => "Trøndelag",
            "Bodø" => "Nordland",
            "Alta" => "Troms og Finnmark",
        };

echo $by." ligger i ".$riktigFylke." fylke.";
?>

<p>I denne oppgaven benyttet jeg meg av match-kontroll for å plassere kommunene i riktig fylke.</p>

</body>
</html>