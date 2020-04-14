<?php
include('db_valores.php');

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdados);

$pid=$_GET['PID'];

$consulta = "delete from produto where ID_Produto=".$pid."";

if(mysqli_query($conexao, $consulta))
{
     echo "successo!";
}
else
{
    echo mysqli_error($conexao);
}

mysqli_close($conexao);

?>