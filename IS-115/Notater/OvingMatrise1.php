<?php
    //nummerisk array
    $lodd = array();
    echo "Dine lodd er ";
    for($i=1; $i<=5; $i++)
    {
        $dette_lodd = rand(1,100);
        $lodd[] = $dette_lodd;
        echo $dette_lodd.", ";
    }

    sort($lodd);
    print_r($lodd);


    $vinnerlodd = rand(1,100);
    if(in_array($vinnerlodd, $lodd))
    {
        echo "<br>Du vant med loddnr. ".$vinnerlodd;
    } else {
        echo "<br>Du vant desverre ikke...";
    }
    //$key = rand(1,100)
    //$array[$key] = '';
    //echo "Antall elementer i en array; ".count($array);
?>