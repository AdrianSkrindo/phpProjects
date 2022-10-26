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
            protected $reg;

            public static $brukerNavn = 0;

            public function __construct()
            {
                self::$brukerNavn = "hei";
            }

        
        }

        $bruker1 = new Bruker;
        $bruker1->forNavn = "Adrian";
        $bruker1->etterNavn = "Lindland";
        $bruker1->reg ="Nå!";

        echo $bruker1 -> forNavn;
        echo "<br>";
        echo $bruker1 -> etterNavn;
        echo "<br>";
        echo $bruker1 -> reg;

        

    ?>
</body>
</html>