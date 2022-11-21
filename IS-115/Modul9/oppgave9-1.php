<!doctype html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>Oppgave 9-1</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Filename</th>
            <th>File type</th>
            <th>File size</th>
            <th>Sist endret</th>
            <th>Leselige</th>
            <th>Skrivelig</th>
            <th>Kjørbar</th>
        </tr>

        <?php
            $dir = "../Modul9/";
            $fh = opendir($dir); // fh = file handle or "pointer"

            /* Iterate file directory */
            while($file = readdir($fh)) 
            {
                echo "<tr>";
                echo "<td><a href=\"" . $dir . $file . "\">" . $file . "</a></td>";
                echo "<td>" . filetype($dir . $file) . "</td>";
                echo "<td>" . filesize($dir . $file) . "</td>";
                echo "<td>" . date("F d Y H:i:s.", filemtime($dir . $file)) . "</td>";
                echo "<td>" . is_readable($dir . $file) . "</td>";
                echo "<td>" . is_writeable($dir . $file) . "</td>";
                echo "<td>" . is_executable($dir . $file) . "</td>";
                echo "</tr>";
            }
            
            closedir($fh);
        ?>

    </table>
</body>

</html>