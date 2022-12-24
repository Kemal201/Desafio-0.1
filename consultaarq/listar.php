<?php

include_once('conexao.php');

/*
Faça tbm uma cond que traga o usuario acima de 20 anos
*/

$ingredientes_do_bolo = 'SELECT * FROM cliente WHERE status = 1';
$bolo_pronto = mysqli_query($_SESSION['conexao'], $ingredientes_do_bolo);

echo '<table border="solid">
  <tr>
    <th>Nome</th>
	<th>Idade</th>
	<th>opções</th>
  </tr>';
  
while($fatia_do_bolo = mysqli_fetch_array($bolo_pronto, MYSQLI_ASSOC)){
	
	echo '<tr>
    <td>'.$fatia_do_bolo['nome'].'</td>
    <td>'.$fatia_do_bolo['idade'].'</td>
	<td><a href="editar.php?id='.$fatia_do_bolo['id'].'">Editar</a> - <a href="deletar.php?id='.$fatia_do_bolo['id'].'">Deletar</a></td>
  </tr>';
}

echo '<a href="cadastrar.php">Novo Cadastro</a>'

?>

<?php
// $nomes = array("João","Maria","Pedro","Ana");

// for($indice=0; $indice<count($nomes) ;$indice++){
//     echo $nomes[$indice].PHP_EOL;
// }