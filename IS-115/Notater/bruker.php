<?php

class Bruker {
    public $fnavn;
    public $enavn;
    protected $brukerNavn;


    public static $antall_brukere = 0;

    public function __construct()
    {
        self::$antall_brukere++;
    }

    //__destruct, forteller hva som skal skje når PHP-taggen slutter, når programmet stopper.
    public function __destruct()
    {
        self::$antall_brukere--;
        echo "Antall brukere er redusert til ".self::$antall_brukere."<br>";

    }
}
  
//$b = new Bruker;
//echo Bruker::$antall_brukere;

class Admin extends Bruker {
    public $admin;

    public function is_admin() {
        return;
    }
}

class Moderator extends Bruker {
    public $rettigheter;

    public function is_moderator() {
        return;
    }
}

class Utleier extends Bruker {
    public $epost;
}

?>