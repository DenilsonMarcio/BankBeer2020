<?php
include('db_valores.php');

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdados);

$bbCelular=$_GET['bbCelular'];

$gravacoes = mysqli_query($conexao,"select * from bankbier where bbCelular=".$bbCelular);

$dados = array();

while($linha = mysqli_fetch_assoc($gravacoes))
{
    $dados[] = $linha; 
}

echo json_encode($dados);

mysqli_close($conexao);

?>