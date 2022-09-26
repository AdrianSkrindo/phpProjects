<?php




    function gjennomsnitt($tall1, $tall2, $tall3, $tall4){
        $gjennomsnitt = ($tall1 + $tall2 + $tall3 + $tall4) / 4;
        return $gjennomsnitt;
    }

    if(isset($_REQUEST['gjennomsnitt'])){
    echo "Gjennomsnittet av tallene ".$_REQUEST['tall1'].", ".$_REQUEST['tall2'].", ".$_REQUEST['tall3']." ,".$_REQUEST['tall4']." er: " .gjennomsnitt($_REQUEST['tall1'],$_REQUEST['tall2'],$_REQUEST['tall3'],$_REQUEST['tall4'],);
    } else {
        echo "Her kan du fylle inn tall og velge mellom gjennomsnitt og standardavvik!";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<pre>
    <form method="post" action="">
      Tall 1: <input type="text" name="tall1" placeholder="Tall 1" required><br>
      Tall 2: <input type="text" name="tall2" placeholder="Tall 2" required><br>
      Tall 3: <input type="text" name="tall3" placeholder="Tall 3" required><br>
      Tall 4: <input type="text" name="tall4" placeholder="Tall 4" required><br>
      <input type="submit" name="gjennomsnitt" value="Gjennomsnitt">
      <input type="submit" name="standar" value="Standardavvik">
    </form>

</pre>
    
</body>
</html>