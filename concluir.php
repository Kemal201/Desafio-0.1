<?php
include_once('conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "UPDATE tarefa SET status = 0 WHERE id_tarefa =".$id;
	$sql = mysqli_query($_SESSION['conexao'], $query);
	
    if($sql){
        echo "Parabéns! Tarefa Concluida com Exito!";
    }else{
        echo "Erro, tarefa não concluída";
    }

}


?>
<br>
<a href="listar.php">Voltar para lista de tarefas pendentes</a>
