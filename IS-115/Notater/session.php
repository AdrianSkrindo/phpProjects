<?php
//Sessions

session_start();

$_SESSION['user']['id'] = 1482;
//$_SESSION['user_id'] = 1482;
$_SESSION['user']['auth']= 3;
$_SESSION['user']['firstname']= "Adrian";
$_SESSION['user']['logged_in'] = true;

//echo $_SESSION['user']['id'] = 1482;
unset($_SESSION['user']['logged_in']);
//session_destroy();

$_SESSION['user']['username'] = 'adriko';
//print_r($_SESSION);


//passord m md5

//$passord = md5("abcd");
//echo $passord;

$passord = password_hash("abcd", PASSWORD_DEFAULT);
echo $passord;

$db_hash = '$2y$10$k2CO82WudkFIk8HdqAruAOez973.uJWLiZjpNelIBcbqsTHL4ds6K';

echo "<br>";

if (password_verify("abcd", $db_hash))
{
    echo "Det stemmer";
} else {
    //echo "Det stemmer ikke";
    header("Location: logginn.php"); exit();
}


?>