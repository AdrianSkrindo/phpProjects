<?php
$php = array('Afrika' => "kilimajaro", 'Amerika' => "Mauna Kea");
$json = json_encode($php);
echo $json. "<br>";
$php = json_decode($json, true);
echo "<pre>";
print_r($php);
echo "</pre>";
?>