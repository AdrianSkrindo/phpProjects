<?php
    function dekrypter($input){
        $search = 'cnqo';
        $dekryptert = str_replace($search, '', ($input));
        return $dekryptert;
    }
?>