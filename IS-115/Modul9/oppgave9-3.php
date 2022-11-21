<?php
require_once('db.inc.php');

/* Form submit? */
if (isset($_REQUEST['upload-send'])) 
{
    echo "<pre>";
    echo "This script: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
    echo "Filename: " . $_FILES['upload-file']['name'] . "<br>";
    echo "Tmp location/name: " . $_FILES['upload-file']['tmp_name'] . "<br>";
    echo "Mime type: " . $_FILES['upload-file']['type'] . "<br>";
    echo "File size: " . $_FILES['upload-file']['size'] . " bytes (" . round($_FILES['upload-file']['size'] / 1048576, 2) . " MB) <br><br>";
    echo "</pre>";
    
    /* Define array for messages */
    $messages = array();
    
    /* File upload */
    if (is_uploaded_file($_FILES['upload-file']['tmp_name'])) 
    {
        /* Collecting information about file */
        $file_type = $_FILES['upload-file']['type'];
        $file_size = $_FILES['upload-file']['size'];
        
        /* Configurations
           Common mime types: https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types
         */
        $acc_file_types = array("jpg" => "image/jpeg",
                                "png" => "image/png"
        );
        $max_file_size = 2000000; // in bytes
        $dir = $_SERVER['DOCUMENT_ROOT'] . "/phpProjects/IS-115/modul9/files/";

        /* No directory with that name? */
        if(!file_exists($dir)) 
        {
            if (!mkdir($dir, 0777, true)) 
                die("Cannot create directory..." . $dir);
        }
        
        /* Constructing file name */
        $suffix = array_search($_FILES['upload-file']['type'], $acc_file_types);

        /* If the file already exists for some reason */
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
        
        /* If everything is fine */
        if (empty($messages)) 
        {
            /* Moving uploaded file to its new home */
            $filepath = $dir . $filename;
            $uploaded_file = move_uploaded_file($_FILES['upload-file']['tmp_name'], $filepath);
            
            if (!$uploaded_file) 
                $messages['error'][] = "The file could not be uploaded";
            else
                $messages['success'][] = "The file was uploaded and can be found here: <strong>" . $filepath . "</strong>";


        }

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
    /* Output messages to user */
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
        echo "<strong>Please select file to upload</strong>";
    }
?>

    <form method="POST" action="" enctype="multipart/form-data">
        <p>
            <label for="upload-file">Select file</label>
            <input name="upload-file" type="file">
            Ønsket navn: <input type="text" name = "navn" required>
        </p>
        <p><button type="submit" name="upload-send">Upload file</button></p>
    </form> <br> <br>
    <a href="oppgave9-3sjekk.php"> Klikk her for å sjekke opplastede bilder. </a>
</body>
</html>