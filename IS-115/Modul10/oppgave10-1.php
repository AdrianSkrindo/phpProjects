<?php

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/Exception.php";
require_once "PHPMailer/src/SMTP.php";


if (isset($_REQUEST['send'])) {
    $til = $_REQUEST['email'];
    $emne = $_REQUEST['emne'];
    $melding = $_REQUEST['innhold'];
    $fra = "adrianskrlindland@gmail.com";
    $mhoder = "From: " . $fra . "\r\n" .
        "Reply-To: adrianskrlindland@gmail.com " . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($til, $emne, $melding, $mhoder);
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
        Sende til: <input type="text" name="email" placeholder="test@gmail.com" required><br>
        Emne: <input type="text" name="emne" placeholder="Emne" required><br>
        Innhold: <input type="text" name="innhold" placeholder="Innhold" required><br>
        <input type="submit" name="send" value="Send">
    </form>
    </pre>
</body>

</html>