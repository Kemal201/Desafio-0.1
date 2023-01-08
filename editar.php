<?php
include_once('conexao.php');

if(isset($_GET['id']) != ''){
    $id = $_GET['id'];

	$query = "SELECT * FROM tarefa WHERE id_tarefa = ".$id;
	$sql = mysqli_query($_SESSION['conexao'], $query);
	$linha = mysqli_fetch_array($sql, MYSQLI_ASSOC);

    $id_tarefa = $linha['id_tarefa'];
    $tarefa = $linha['titulo_tarefa'];
    $desc_tarefa = $linha['desc_tarefa'];

    

}else{
    $id_tarefa = $_POST['id_p'];
    $tarefa = $_POST['tarefa'];
    $desc_tarefa = $_POST['desc_tarefa'];
    

    $query = "UPDATE tarefa SET titulo_tarefa = '$tarefa',desc_tarefa = '$desc_tarefa' WHERE id_tarefa = ".$id_tarefa;
	$sql = mysqli_query($_SESSION['conexao'], $query);

    if($sql == TRUE){
        echo "Registrado com sucesso!";
    }else{
        echo "Erro na edição de dados!";
    }

    $query = "SELECT * FROM tarefa WHERE id_tarefa = ".$id_tarefa;
	$sql = mysqli_query($_SESSION['conexao'], $query);
	$linha = mysqli_fetch_array($sql, MYSQLI_ASSOC);
}


?>

<form action="editar.php" method="POST">
    <label>Id =</label><?php echo $id_tarefa; ?>
    <input type="hidden" name="id_p" value="<?php echo $id_tarefa; ?>">
<br>
    <label>Tarefa</label>
    <input type="text" name="tarefa" value="<?php echo $tarefa; ?>">
<br>
    <label>Descricao</label>
    <input type="text" name="desc_tarefa" value="<?php echo $desc_tarefa; ?>">
<br>
    <input type="submit" value="Atualizar Registro">
</form>

<a href="cadastrar.php">Cadastrar Nova Tarefa</a>