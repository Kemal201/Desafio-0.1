<?php
include_once('conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "UPDATE tarefa SET status = 3 WHERE id_tarefa =".$id;
	$sql = mysqli_query($_SESSION['conexao'], $query);
	
    if($sql){
        echo "Registro deletado com Sucesso";
    }else{
        echo "Registro não deletado";
    }

}


?>
<br>
<a href="listar.php">Voltar para lista de tarefas pendentes</a>
