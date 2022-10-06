<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 1</h1>
    
    <?php 
        $alder = 14; //Endre for test.
        $navn = "Adrian";
        $myndig = "";

        //Definerer variablene. Setter $myndig tom, fordi den endres i "if-setningen" uansett.
        //Bestemmer hva som må oppfylles for at handlingen inni klammeparantesene skal oppfylles. Hvis ikke oppfylles, gjør "else"
        if ($alder >= 18){
            $myndig = "myndig";
        } else{
            $myndig = "ikke myndig";};

        //printer resultat
        echo $navn." er ".$alder." og er dermed ".$myndig.".";
            ?>
</body>
</html>