<?php
require_once ('db.inc.php');

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

$sql = "SELECT * 
        FROM bruker";

$q = $pdo->prepare($sql);

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
//$q->debugDumpParams();

$brukere = $q->fetchAll(PDO::FETCH_OBJ);

if($q->rowCount() > 0) {
    foreach($brukere as $bruker) {
        echo $bruker->bid . " // ";
        echo $bruker->fnavn . " // ";
        echo $bruker->enavn . " // ";
        echo $bruker->epost . " // ";
        echo $bruker->tlf . " // ";
        echo $bruker->fdate . "<br>";
    }
} else {
    echo "The query resulted in an empty result set.";
}
?>

</body>

</html>