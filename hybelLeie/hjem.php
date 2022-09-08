<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'hybelprosjekt') or die ("Kunne ikke koble til database.");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/hjemstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Hjemside</title>
</head>
<body>

<div class="topnav">
  <a class="active" href="hjem.php">Hjem</a>
  <a href="#news">Nyheter</a>
  <a href="#contact">Min side</a>
  <a class="loggUT" href="loggUT.php">Logg ut</a>
</div>

<p>Du er nå logget inn på brukeren <?php echo $_SESSION['brukernavn']."."; ?></p>

<?php

    $sql = "SELECT sted, pris, hybel_id FROM hybel";
    $result = mysqli_query($conn, $sql);
    $hybelArray = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $hybelArray[] = $row;


        }
    }

    //print_r($hybelArray);
  



    function build_table($hybelArray){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($hybelArray[0] as $key=>$value){
        $key = match ($key) {
            "sted" => "By",
            "pris" => "Månedspris",
            "hybel_id" => "Hybel ID"
        };
          
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $hybelArray as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';

    return $html;
}


echo build_table($hybelArray);
?>

<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
  </tr>
</table>

<div class="wrapper">
    <div class="box box1"><img src="crusher.jpg" alt="a balloon"></div>
    <div class="box box2"><img src="crusher.jpg" alt="a balloon"></div>
    <div class="box box3"><img src="crusher.jpg" alt="a balloon"></div>
</div>   



    
</body>
</html>