<?php
include_once('conexao.php');
include_once('funcao.php');

if(isset($_POST['desc'])){

    $task = $_POST['task'];
    $desc = $_POST['desc'];
    // $who = $_POST['who'];
    // $when = $_POST['when'];

    if($task != ''){
        $query = "INSERT INTO tarefa(titulo_tarefa,desc_tarefa) VALUES('$task','$desc')";
        echo rodasql_tarefa($query, 'INSERT');
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
        <br />
        <label>Escreva abaixo a descrição da tarefa:</label>
        <input type="text" name="desc">
        <br />
        <!-- <label>Para quem você deseja atribuir está tarefa?</label>
        <input type="text" name="who">
        <br /> -->
        <!-- <label>Qual data voce deseja realizar esta tarefa?</label>
        <input id="date" type="date">
        <br />
        <label for="when">Que horas deseja realizar esta tarefa?</label>

            <input type="time" id="when" name="when" required>
        <br /> -->
        <input type="submit" value="Adicionar Nova Tarefa">
<br>
<br>
        <a href="listar.php">Veja aqui suas listas de tarefas</a>
    </form>
</body>
</html>