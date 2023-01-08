<?php
include_once('conexao.php');

$roda_sql = 'SELECT * FROM tarefa WHERE status = 0';
$sql = mysqli_query($_SESSION['conexao'],$roda_sql);

echo '
<center>
<p>Tarefas Concluídas</p>
<table border="solid">
  <tr>
    <th>ID</th>
	<th>Tarefa</th>
	<th>Descricao Tarefa</th>
  </tr>';

  while($linha = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
	$id = $linha['id_tarefa'];
	echo '<tr>
    <td>'.$linha['id_tarefa'].'</td>
    <td>'.$linha['titulo_tarefa'].'</td>
    <td>'.$linha['desc_tarefa'].'</td>
    <td><a href=editar.php?id='.$id.'>Editar</a> - <a href=deletar.php?id='.$id.'>Deletar</a> - <a href=concluir.php?id='.$id.'>Concluir</a></td>';
}
echo '<br>';
?>
</table>
</center>

<a href="cadastrar.php">Nova Tarefa</a>
<a href="listar.php">Tarefas Pendentes</a>