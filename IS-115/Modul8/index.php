<?php
require_once('db.inc.php');


if (isset($_POST['logginn'])) {

    $brukernavn = $_POST['brukernavn'];
    $sql = "SELECT * FROM brukere WHERE brukernavn = '$brukernavn'";
    $q = $pdo->prepare($sql);


    try {
        $q->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    
    }

    $bruker = $q->fetch(PDO::FETCH_OBJ);

    if (isset($bruker->passord)) 
    {
        if (password_verify($_REQUEST['passord'], $bruker->passord)) 
        {

            $_SESSION['user']['id'] = $bruker->id;
            $_SESSION['user']['username'] = $bruker->brukernavn;

            header("Location:oppgave8-1.php");
            exit();
        } else {
            $messages[] = "Brukernavn og/eller passord er galt";
        }
    } else {
        $messages[] = "Brukernavn og/eller passord er galt";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>


        <h1>Logg inn</h1>

        <form method="post" action="" method="post">
            <p><input type="text" name="brukernavn" value="" placeholder="Brukernavn eller e-post"></p>
            <p><input type="password" name="passord" value="" placeholder="Passord"></p>
            <p class="submit"><input type="submit" name="logginn" value="Logg inn"></p>




</body>

</html>