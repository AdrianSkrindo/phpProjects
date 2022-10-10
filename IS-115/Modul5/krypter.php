<?php
    function krypter($input){
        $kryptertOrd = implode('cnqo', str_split($input));
        return $kryptertOrd;
    }
?>