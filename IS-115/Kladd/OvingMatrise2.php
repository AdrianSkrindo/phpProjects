<?php

    //$deltakere = array('navn'=> 'Silje');
    //echo $deltakere['navn']."<br>";
    //print_r($deltakere);


    $deltakere = array(
        'd1'=> array(
            'navn'=> 'Silje',
            'epost' => 'silje@hotmail.com',
            'poengsum' => '19'
        ),
        'd2' => array(
            'navn'=> 'Adrian',
            'epost' => 'adrian@hotmail.com',
            'poengsum' => '20'
        )      
    );
    echo "<pre>";
    print_r($deltakere);
    echo "</pre><br>";

    echo $deltakere['d2']['navn'];
?>