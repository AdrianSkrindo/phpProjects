
<?php
require_once('db.inc.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hei
    <?php
    echo $_SESSION['user']['username'] ?>
    <a class="loggUt" href="loggUt.php">Logg ut</a>
</body>
</html>