<?php

$tall1 = rand(1,50);

echo "Mitt tilfeldige tall er: ".$tall1. "<br>";

$teller=0;
do{

    $tall2 = rand(1,50);
    $teller++;
}
while($tall2 != $tall1);

    echo "Tall 2 er ".$tall2." og vi brukte ".$teller." antall forsøk<br>";   


?>
