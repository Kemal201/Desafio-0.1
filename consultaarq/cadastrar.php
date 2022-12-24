<?php

include_once('conexao.php');

if(isset($_POST['nome']) != ''){
	$nome = $_POST['nome'];
	
	$sql = "INSERT INTO cliente (nome) VALUES ('$nome')";
	$roda_sql = mysqli_query($_SESSION['conexao'], $sql);
	
	if($roda_sql == TRUE){
		echo 'Registrado!';
	}else{
		echo 'Erro ao registrar!';
	}
}

?>

<form action="cadastrar.php" method="post">

	Nome: <input type="text" name="nome">
	<br /><br />
	<input type="submit" value="Enviar">

</form>

<a href="listar.php">Lista de Usuários</a>