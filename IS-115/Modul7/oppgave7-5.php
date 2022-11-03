<?php
require_once('db.inc.php');
?>

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

    $sql = "SELECT * FROM bruker_preferanser
            INNER JOIN bruker ON bruker.bid = bruker_preferanser.bid 
            INNER JOIN preferanser ON preferanser.preferanse_id = bruker_preferanser.preferanse_id
            ORDER BY preferanser.preferanser_navn";

    $q = $pdo->prepare($sql);


    try {
        $q->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }
    //$q->debugDumpParams();


    $preferanser = $q->fetchAll(PDO::FETCH_OBJ);
    if ($q->rowCount() > 0) {
        echo "<h2>Preferanser</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Medlem_id</th>";
        echo "<th>Navn</th>";
        echo "<th>Preferanse-grupper</th>";
        echo "</tr>";
        foreach ($preferanser as $preferanse) {
            echo "<tr>";
            echo "<td>" .  $preferanse->bid . "</td>";
            echo "<td>" .  $preferanse->fnavn;
            echo "<td>" .  $preferanse->preferanser_navn . "</td>";
            echo "</td>";
        }
        echo "</table>";
    } else {
        echo "Spørringen returnerte ingen oppføringer";
    }
    ?>

</body>

</html>