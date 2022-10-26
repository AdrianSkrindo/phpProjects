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
            var $brukerNavn;
            var $reg;

            public function getNavn()
            {
                echo $this -> forNavn." ".$this -> etterNavn;
            }

            public function sjekkReg()
            {
                echo $this -> reg;
            }
        }

        $bruker1 = new Bruker;
        $bruker1->forNavn = "Adrian";
        $bruker1->etterNavn = "Lindland";
        $bruker1->brukerNavn = "adriko";
        $bruker1->reg = "11.05 26. 10. 2000";

        $bruker1 -> getNavn();
        echo "<br>";
        $bruker1 -> sjekkReg();
    ?>
</body>
</html>