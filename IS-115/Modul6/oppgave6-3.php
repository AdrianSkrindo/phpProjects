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

    $matrise = array();

    class Bruker
    {
        var $forNavn;
        var $etterNavn;
        protected $brukerNavn;
        protected $reg;



        public function __construct($forNavn, $etterNavn)
        {
            $this->forNavn = $forNavn;
            $this->etterNavn = $etterNavn;
            $alle_bok = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrtuvwxyz";
            $this->brukerNavn = substr(str_shuffle($alle_bok), 0, 6);
            $this->reg = date("Y/m/d");
        }

        public function __destruct()
        {
            $matrise[] = $this->hentBrukernavn();
            print_r($matrise);
        }

        function hentFornavn()
        {
            return $this->fornavn;
        }

        function hentBrukernavn()
        {
            return $this->brukerNavn;
        }

        function hentReg()
        {
            return $this->reg;
        }
    }

    $bruker1 = new Bruker("Adrian", "Skrindo");

    echo $bruker1->forNavn;
    echo "<br>";
    echo $bruker1->hentBrukernavn();
    echo "<br>";
    echo $bruker1->hentReg();
    echo "<br>";
    echo "<br>";



    ?>
</body>

</html>