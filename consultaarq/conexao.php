<?php
session_start();
$_SESSION['conexao'] = mysqli_connect("localhost","root","","teste");

if (mysqli_connect_errno()) {
  echo "Erro ao conectar ao banco: " . mysqli_connect_error();
  exit();
}
?>