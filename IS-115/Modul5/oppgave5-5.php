<?php

//Variabel for orginal string
$utgangspunkt = 'Krypteringsklar';
echo $utgangspunkt;
echo "<br>";
echo "<br>";


//Legger til asdf mellom hver bokstav og printer resultat
$formatted = implode('asdf',str_split($utgangspunkt)); 
echo $formatted;
echo "<br>";
echo "<br>";


//Asdf byttes ut med mellomrom i kryptert tekst
$search = 'asdf' ;
$trimmed = str_replace($search, '', $formatted) ;
echo $trimmed ;
?> 
