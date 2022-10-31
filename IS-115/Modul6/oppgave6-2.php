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
    class Bruker
    {
        var $forNavn;


        public function getNavn()
        {
            return $this->forNavn;
        }
    }

    class Student extends Bruker
    {
        var $studentNr;

        public function getNavn()
        {
            return $this->forNavn . " , studentNr: " . $this->studentNr;
        }
    }

    $bruker1 = new Bruker;
    $bruker1->forNavn = "Adrian";
    $student1 = new Student;
    $student1->forNavn = "Emanuel";
    $student1->studentNr = "123123";

    echo "Begge funksjonen under, utfører metoden getNavn(); <br>Men hvor metoden fra student-klassen vil retrunere studennummeret til brukeren i tilegg.";
    echo "<br><br>";
    echo $bruker1->getNavn();
    echo "<br><br>";
    echo $student1->getNavn();


    ?>
</body>

</html>