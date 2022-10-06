<?php
    //funksjon for å regne ut gjennomsnitt
    function gjennomsnitt($tall1, $tall2, $tall3, $tall4){
        $gjennomsnitt = ($tall1 + $tall2 + $tall3 + $tall4) / 4;
        return $gjennomsnitt;
    }

    //funksjon for å regne ut standardavvik
    function standardavvik($tall1, $tall2, $tall3, $tall4){
        $gjennomsnitt = ($tall1 + $tall2 + $tall3 + $tall4) / 4;
        $standardavvik1 = ($tall1**2 + $tall2**2 + $tall3**2 + $tall4**2)-(4*($gjennomsnitt**2));
        $standardavvik = sqrt($standardavvik1/4);
        return $standardavvik;
    }
?>