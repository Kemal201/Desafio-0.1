<?php

include_once('conexao.php');

$id = $_GET['id'];

$sql_del = "UPDATE cliente SET status = 0 WHERE id = ".$id;
$roda_del = mysqli_query($_SESSION['conexao'], $sql_del);

if($roda_del == TRUE){
	echo 'Deletado com sucesso!';
}else{
	echo 'Erro ao deletar';
}

echo '<a href="listar.php">Listar</a>';

?>