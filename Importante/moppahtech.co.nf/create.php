<?php

include('db_valores.php');

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdados);
	

$pnome=$_GET['P_Nome'];
$ppreco=$_GET['P_Preco'];

$consulta = "insert into produto (P_Nome, P_Preco) values ('".$pnome."',".$ppreco.")";

if(mysqli_query($conexao, $consulta))
{
     echo "successo!";
}
else
{
     echo "falha";
}

mysqli_close($conexao);

?>