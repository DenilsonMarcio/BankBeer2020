<?php
include('db_valores.php');

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdados);

$pid=$_GET['PID'];
$pnome=$_GET['P_Nome'];
$ppreco=$_GET['P_Preco'];

$consulta = "update produto set P_Nome='".$pnome."', P_Preco=".$ppreco." where ID_Produto=".$pid."";

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