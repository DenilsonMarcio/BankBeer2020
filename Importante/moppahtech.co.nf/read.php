<?php
include('db_valores.php');

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdados);

$pid=$_GET['PID'];

$gravacoes = mysqli_query($conexao,"select * from produto where ID_Produto=".$pid);

$dados = array();

while($linha = mysqli_fetch_assoc($gravacoes))
{
    $dados[] = $linha; 
}

echo json_encode($dados);

mysqli_close($conexao);

?>