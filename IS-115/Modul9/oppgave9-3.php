<?php
require_once('db.inc.php');

// Hvis knappen er trykket 
if (isset($_REQUEST['upload-send'])) 
{
    echo "<pre>";
    echo "This script: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
    echo "Filename: " . $_FILES['upload-file']['name'] . "<br>";
    echo "Tmp location/name: " . $_FILES['upload-file']['tmp_name'] . "<br>";
    echo "Mime type: " . $_FILES['upload-file']['type'] . "<br>";
    echo "File size: " . $_FILES['upload-file']['size'] . " bytes (" . round($_FILES['upload-file']['size'] / 1048576, 2) . " MB) <br><br>";
    echo "</pre>";
    
    // Feilmeldinger
    $messages = array();
    
    // File upload 
    if (is_uploaded_file($_FILES['upload-file']['tmp_name'])) 
    {
        // Henter informasjon om filen som er sendt
        $file_type = $_FILES['upload-file']['type'];
        $file_size = $_FILES['upload-file']['size'];
        
        $acc_file_types = array("jpg" => "image/jpeg",
                                "png" => "image/png"
        );
        $max_file_size = 2000000; // i bytes
        $dir = $_SERVER['DOCUMENT_ROOT'] . "/phpProjects/IS-115/modul9/files/";

        // Mekker katalog, hvis den ikke allerede finnes
        if(!file_exists($dir)) 
        {
            if (!mkdir($dir, 0777, true)) 
                die("Cannot create directory..." . $dir);
        }
        
        // Sjekker hvilke filtype det er, gir dette til variablene, som brukes i navngenerering
        $suffix = array_search($_FILES['upload-file']['type'], $acc_file_types);

        // mekker navnet på filen, ved hjelp av ønskelig input + filtype
        do {
            //$filename  = substr(md5(date('YmdHis')), 0, 5) . '.' . $suffix;
            $filename = $_POST['navn']. '.' . $suffix;
        }
        while(file_exists($dir . $filename));
        
        /* Errors? */
        if (!in_array($file_type, $acc_file_types)) 
        {
            $types = implode(", ", array_keys($acc_file_types));
            $messages['error'][] = "Invalid file type (only <em>" . $types . "</em> are accepted)";
        }
        if ($file_size > $max_file_size)
            $messages['error'][] = "The file size (" . round($file_size / 1048576, 2) . " MB) exceeds max file size (" . round($max_file_size / 1048576, 2) . " MB)"; // Bin. conversion
        
        // Hvis alt går etter planen
        if (empty($messages)) 
        {
            //Bestemmer hvor filen skal plasseres, og laster den opp. 
            $filepath = $dir . $filename;
            $uploaded_file = move_uploaded_file($_FILES['upload-file']['tmp_name'], $filepath);
            
            if (!$uploaded_file) 
                $messages['error'][] = "The file could not be uploaded";
            else
                $messages['success'][] = "The file was uploaded and can be found here: <strong>" . $filepath . "</strong>";


        }
        
        //Ved en eventuel ekte database, bruk $_session[bruker]-typ
        $brukernavn = "Bruker1";

        $sql = "INSERT INTO brukere
        (navn, bilde) VALUES (:fnavn, :fbilde)";

        $q = $pdo->prepare($sql);

        $q->bindParam(':fnavn', $brukernavn, PDO::PARAM_STR);
        $q->bindParam(':fbilde', $filename, PDO::PARAM_STR);


        try {
            $q->execute();
        } catch (PDOException $e) {
            echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
        }


    } else {
        $messages['error'][] = "No file is selected";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Oppgave 9-3</title>
</head>

<body>
<?php
    // Ved eventuelle feil
    if(isset($messages) && !empty($messages))
    {
        echo "<strong>Message" . (sizeof($messages, COUNT_RECURSIVE)-1 > 1 ? "s:<br>" : ":<br>") . "</strong>";
        foreach($messages as $msg_type => $type_messages)
        {
            if($msg_type == 'error')
                foreach($type_messages as $message) { echo '<span style="color:red";>- ' . $message . '</span><br>'; }
            elseif($msg_type == 'success')
                foreach($type_messages as $message) { echo '<span style="color:green";>- ' . $message . '</span><br>'; }
        }
    }
    else
    {
        echo "Velg bildet du ønsker å laste opp.";
    }
?>

    <form method="POST" action="" enctype="multipart/form-data">
        <p>
            <label for="upload-file">Velg fil</label>
            <input name="upload-file" type="file">
            Ønsket navn: <input type="text" name = "navn" required>
        </p>
        <p><button type="submit" name="upload-send">Last opp</button></p>
    </form> <br> I et prosjekt, ville jeg brukt session id/navn til å bestemme eventuell bruker/navn på bilde. <br>
    <a href="oppgave9-3sjekk.php"> Klikk her for å sjekke opplastede bilder. </a>
</body>
</html>