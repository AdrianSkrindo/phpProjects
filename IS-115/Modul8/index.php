<?php
require_once('db.inc.php');

$brukernavn = " ";
$passord = " ";

if (isset($_POST['login'])) {
    $brukernavn = $_POST['brukernavn'];
    $passord = $_POST['passord'];
}
if (isset($_POST['reg-send'])) {

    $sql = "SELECT * FROM brukere WHERE brukernavn = '$brukernavn'";
    $q = $pdo->prepare($sql);
    $q->bindParam(':brukernavn', $_REQUEST['brukernavn'], PDO::PARAM_STR);


    $bruker = $q->fetch(PDO::FETCH_OBJ);

    if (isset($bruker->passord)) {
        if (password_verify($_REQUEST['passord'], $bruker->passord)) {

            $_SESSION['user']['id'] = $bruker->id;
            $_SESSION['user']['username'] = $bruker->brukernavn;
            $_SESSION['user']['firstname'] = $bruker->fornavn;

            header("Location: oppgave8-1.php");
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

    <?php if (isset($messages)) {
        foreach ($messages as $message) {
            echo $message;
        }
    } ?>
    <?php if (!isset($_SESSION['user']['username'])) { ?>


        <h1>Logg inn</h1>

        <form method="post" action="" method="post">
            <p><input type="text" name="brukernavn" value="" placeholder="Brukernavn eller e-post"></p>
            <p><input type="password" name="passord" value="" placeholder="Passord"></p>
            <p class="submit"><input type="submit" name="login" value="Logg inn"></p>



        <?php } else { ?>
            <p>Du er innlogget som <?php echo $_SESSION['user']['username']; ?> </p>
            <button onclick="document.location='L7-utsia.php?logout'">Logg ut</button>
        <?php } ?>




</body>

</html>