<?php

include_once('conexao.php');

if(isset($_GET['id']) != ''){
	
	$id = $_GET['id'];
	
	$busca_dados = "SELECT * FROM cliente WHERE id = ".$id;
	$roda_busca = mysqli_query($_SESSION['conexao'], $busca_dados);
	$resp_busca = mysqli_fetch_array($roda_busca, MYSQLI_ASSOC);
	
}else{
	
	$id_post = $_POST['id_post'];
	$nome = $_POST['nome'];
	
	$sql_up = "UPDATE cliente SET nome = '$nome' WHERE id = $id_post";
	$roda_up = mysqli_query($_SESSION['conexao'], $sql_up);
	
	if($roda_up){
		echo 'Atualizado';
	}else{
		echo 'Erro ao echo atualizar';
	}
	
	$busca_dados = "SELECT * FROM cliente WHERE id = ".$id_post;
	$roda_busca = mysqli_query($_SESSION['conexao'], $busca_dados);
	$resp_busca = mysqli_fetch_array($roda_busca, MYSQLI_ASSOC);
	
	
}

?>

<form action="editar.php" method="post">

	<input type="hidden" name="id_post" value="<?php echo $resp_busca['id']; ?>">
	Nome: <input type="text" name="nome" value="<?php echo $resp_busca['nome']; ?>">
	<br /><br />
	<input type="submit" value="Atualizar">

</form>

<a href="listar.php">Lista de Usuários</a>