<?php
require_once('db.inc.php');

$sql = "DELETE FROM users 
        WHERE UID = :uid";
$q = $pdo->prepare($sql); 
$q->bindParam(':uid', $uid, PDO::PARAM_INT);

$uid = 3;

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
//$q->debugDumpParams();

if($q->rowCount() > 0) {
    echo $q->rowCount() . " record" . ($q->rowCount() != 1 ? "s were " : " was ") . "deleted.";
} else {
    echo "The record was not deleted.";
}

/* Godt råd: vær forsiktig med hva du sletter.
   Et eget felt (f.eks. 'aktiv') som settes til 1/0 kan være en bedre løsning. */

?>