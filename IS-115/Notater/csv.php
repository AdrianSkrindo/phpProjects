<?php
if(($fh =fopen("brukere.csv", "r")) !==false) {
    $rowno = 1;
    while (($row = fgetcsv($fh, 0, ",")) !==false) {
        $row = array_filter($row);
        $num = count($row);
        if ($num) {
            echo "<p>$num felt på linje $rowno:<br/></p>\n";
            $rowno++;
            for ($f=0;f<$num;f++){

            }
        }
    }
}
?>