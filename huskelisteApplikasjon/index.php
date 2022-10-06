<?php 

    $errors = "";

    //koble til databasen.

    $db =mysqli_connect('localhost', 'root', '','huskeliste');

    if (isset($_POST['submit'])) {
        $task = $_POST['task'];
        if (empty($task)) {
            $errors = "Oppgave verdi tom";
        }else{

        mysqli_query($db, "INSERT INTO oppgaver (oppgave) VALUES ('$task')");
        header('location: index.php');
     }
    }

    //delete task
    if (isset($_GET['del_task'])) {
        $id = $_GET['del_task'];
        mysqli_query($db, "DELETE FROM oppgaver WHERE id=$id");
        header('location: index.php');
    }

    $tasks = mysqli_query($db, "SELECT * FROM oppgaver");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huskeliste, ved hjelp av PHP og mySQL</title>
    <link rel="stylesheet" type="text/css" href="huskelistestyle.css">
</head>
<body>
    <div class="heading">
        <h2>Huskeliste, ved hjelp av PHP og mySQL</h2>
    </div>

    <form method="POST" action="index.php">

        <?php if (isset($errors)) { ?>
            <p><?php echo $errors; ?> </p>
        
        <?php } ?>


        <input type="text" name="task" class="task_input">
        <button type="submit" class="add_btn" name="submit">Legg til oppgave</button>
    </form>

    <table>

        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 1; while ($row = mysqli_fetch_array($tasks)) {
            ?>
            <tr>
                <td><?php echo $i; ?> </td>
                <td class="task"><?php echo $row['oppgave']; ?></td>
                <td class="delete">
                    <a href="index.php?del_task=<?php echo $row['id']; ?>">X</a>
                </td>
            </tr>

            <?php $i++; } ?>
        </tbody>

    </table>
</body>
</html>