<?php
include('db_valores.php');

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdados);

$bbCelular=$_GET['bbCelular'];

$consulta = "delete from bankbier where bbCelular=".$bbCelular."";

if(mysqli_query($conexao, $consulta))
{
     echo "Excluido do banco de dados !";
}
else
{
	echo "Erro ao excluir os dados!";
	
    echo mysqli_error($conexao);
	
}

mysqli_close($conexao);

?>