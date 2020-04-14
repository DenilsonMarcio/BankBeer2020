<?php

include('db_valores.php');

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdados);
	

$bbCelular=$_GET['bbCelular']; 
$bb_Nome=$_GET['bb_Nome'];
$bb_Senha=$_GET['bb_Senha'];
$bb_Tipo_1=$_GET['bb_Tipo_1'];
$bb_Tipo_2=$_GET['bb_Tipo_2'];
$bb_Observacao=$_GET['bb_Observacao'];

$consulta = "insert into bankbier (bbCelular, bb_Nome, bb_Senha, bb_Tipo_1, bb_Tipo_2) values ('".$bbCelular."','".$bb_Nome."','".$bb_Senha."','".$bb_Tipo_1."','".$bb_Tipo_2."')";

if(mysqli_query($conexao, $consulta))
{
     echo "Cadastro realizado com sucesso!";
}
else
{
     echo "Não foi possivel realizar o cadastro!";
	 
     echo mysqli_error($conexao);
}

mysqli_close($conexao);

?>