<?php
session_start();
$con = $_SESSION['conexao'] = mysqli_connect("localhost","root","","todo");

if(mysqli_connect_errno()){
    echo "Erro ao conectar ao banco: ". mysqli_connect_error();
    exit();
}
?>