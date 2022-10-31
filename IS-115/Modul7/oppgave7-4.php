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

    if (isset($_REQUEST['tilgjenglige'])) {

        $sql = "SELECT * 
        FROM annonse WHERE status =1";

        $q = $pdo->prepare($sql);

        try {
            $q->execute();
        } catch (PDOException $e) {
            echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
        }
        //$q->debugDumpParams();

        $annonser = $q->fetchAll(PDO::FETCH_OBJ);
        echo "<table>";
        echo "<th>Id</th>";
        echo "<th> </th>";
        echo "<th>Sted</th>";
        echo "<th> </th>";
        echo "<th>Pris</th>";
        echo "<th> </th>";
        echo "<th>Areal</th>";
        echo "<th> </th>";
        echo "<th>Status</th>";
        if ($q->rowCount() > 0) {
            foreach ($annonser as $annonse) {
                echo "<tr>";
                echo "<td>" . $annonse->AID . "<td>" . " // ";
                echo "<td>" . $annonse->sted . "<td>" . " // ";
                echo "<td>" . $annonse->pris . "<td>" . " // ";
                echo "<td>" . $annonse->areal . "<td>" . " // ";
                echo "<td>" . $annonse->status . "<td>";
                echo "</tr>";
            }
        } else {
            echo "The query resulted in an empty result set.";
        }


        echo "</table>";
    }

    if (isset($_REQUEST['alle'])) {

        $sql = "SELECT * 
        FROM annonse";

        $q = $pdo->prepare($sql);

        try {
            $q->execute();
        } catch (PDOException $e) {
            echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
        }
        //$q->debugDumpParams();

        $annonser = $q->fetchAll(PDO::FETCH_OBJ);
        echo "<table>";
        echo "<th>Id</th>";
        echo "<th> </th>";
        echo "<th>Sted</th>";
        echo "<th> </th>";
        echo "<th>Pris</th>";
        echo "<th> </th>";
        echo "<th>Areal</th>";
        echo "<th> </th>";
        echo "<th>Status</th>";
        if ($q->rowCount() > 0) {
            foreach ($annonser as $annonse) {
                echo "<tr>";
                echo "<td>" . $annonse->AID."<td>". " // ";
                echo "<td>" . $annonse->sted."<td>". " // ";
                echo "<td>" . $annonse->pris."<td>". " // ";
                echo "<td>" . $annonse->areal."<td>". " // ";
                echo "<td>" . $annonse->status."<td>";
                echo "</tr>";
            }
        } else {
            echo "The query resulted in an empty result set.";
        }


        echo "</table>";
    }
    ?>

    <form method="post" action="">
        <input type="submit" name="tilgjenglige" value="Tilgjenglige">
        <input type="submit" name="alle" value="Alle">
    </form>


</body>

</html>