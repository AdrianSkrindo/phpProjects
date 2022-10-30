<?php
require_once('db.inc.php');

$sql = "INSERT INTO bruker 
        (fnavn, enavn, epost, tlf, fdate) 
        VALUES 
        (:fnavn, :enavn, :epost, :tlf, :fdate)";

$q = $pdo->prepare($sql);

$q->bindParam(':fnavn', $firstname, PDO::PARAM_STR);
$q->bindParam(':enavn', $lastname, PDO::PARAM_STR);
$q->bindParam(':epost', $epost, PDO::PARAM_STR);
$q->bindParam(':tlf', $telefon, PDO::PARAM_STR);
$q->bindParam(':fdate', $fdato, PDO::PARAM_INT);

if (isset($_REQUEST['registrer'])) {
    $firstname = $_REQUEST['fnavn'];
    $lastname = $_REQUEST['enavn'];
    $epost = $_REQUEST['epost'];
    $telefon = $_REQUEST['tlf'];
    $fdato = $_REQUEST['fdate'];

    try {
        $q->execute();
    } catch (PDOException $e) {
        echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
    }
    //$q->debugDumpParams();

    //Sjekker om noe er satt inn, returnerer UID.
    if ($pdo->lastInsertId() > 0) {
        echo "Data inserted into database, identified by UID " . $pdo->lastInsertId() . ".";
    } else {
        echo "Data were not inserted into database.";
    }
}
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
    <pre>
    <form method="post" action="">
      Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" required><br>
      Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
      E-post: <input type="text" name="epost" placeholder="E-post" required><br>
      Telefon: <input type="text" name="tlf" placeholder="Mobilnummer" required><br>
      Fødselsdato: <input type="text" name="fdate" placeholder="2001-05-05"><br>
      <input type="submit" name="registrer" value="Registrér">
    </form>

</pre>


</body>

</html>