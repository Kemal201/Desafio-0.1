<?php

if(isset($_POST['Adicionar Nova Tarefa'])){

    $task = $_POST['task'];
    $who = $_POST['who'];
    $when = $_POST['when'];

    if($task != '' && $who != '' && $when != ''){
        $sql = "I"
    }

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
</head>
<body>
    <form action="cadastrar.php" method="POST">
        <label>Escreva abaixo a tarefa que você deseja anotar:</label>
        <input type="text" name="task">
        <label>Para quem você deseja atribuir está tarefa?</label>
        <input type="text" name="who">
        <label>Quando você deseja realizar esta tarefa?</label>
        <input type="text" name="when">
        <input type="button" value="Adicionar Nova Tarefa">
    </form>
</body>
</html>