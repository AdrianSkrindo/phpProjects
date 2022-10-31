<?php
//echo $_SERVER['QUERY_STRING'];

//echo $_REQUEST['fornavn']. " " . $_REQUEST['etternanv'];

//Lag script for annonse som skal vise en bestemt event eller annonse (bruk en ID)

//$sql = 'SELECT * from annonse where id = $_REQUEST[]';

// Cookies

setcookie("lang", "no", time() + 5184000, "/"); //60 døgn (60*60*24*60)

//Skrive ut eller lagre i var
//echo $_COOKIE['lang'];

//Slette en kjeks
//setcookie("lang", "no", time() -51840000, "/");


setcookie("navn", "hybbel", time() +5184000, "/");

?>