<?php 
include_once('conexao.php');

function rodasql_tarefa($sql,$uso){
    if($uso == 'INSERT'){
        $query = $sql;
        $roda_sql = mysqli_query($_SESSION['conexao'], $query);
        
        if($roda_sql == TRUE){
            $msg = 'Registrado!';
        }else{
            $msg = 'Erro ao registrar!';
        }
        return $msg;
    }

    if($uso == 'SELECT'){
        $query = $sql;
        $roda_sql = mysqli_query($_SESSION['conexao'], $query);
        $linha = mysqli_fetch_array($roda_sql, MYSQLI_ASSOC);

        return $linha;
    }
}

?>