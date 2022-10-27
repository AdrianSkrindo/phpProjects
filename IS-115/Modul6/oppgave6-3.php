<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



        class Bruker {
            var $forNavn;
            var $etterNavn;
            var $reg;
            var $brukerNavn;


            public function __construct()
            {
                self::$brukerNavn = "hei";
                self::$reg = date("Y/m/d");
            }


        
        }

        $bruker1 = new Bruker;
        $bruker1->forNavn = "Adrian";
        $bruker1->etterNavn = "Lindland";

        echo $bruker1 -> forNavn;
        echo "<br>";
        echo $bruker1 -> etterNavn;
        echo "<br>";
        echo $bruker1 -> reg;

        

    ?>
</body>
</html>