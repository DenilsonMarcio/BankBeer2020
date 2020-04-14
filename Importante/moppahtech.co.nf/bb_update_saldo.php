<?php
include('db_valores.php');

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdados);

$bbCelular=$_GET['bbCelular']; 
$bb_Nome=$_GET['bb_Nome'];
$bb_Senha=$_GET['bb_Senha'];
$bb_Tipo_1=$_GET['bb_Tipo_1'];
$bb_Tipo_2=$_GET['bb_Tipo_2'];
$bb_saldo=$_GET['bb_saldo'];
$bb_Observacao=$_GET['bb_Observacao'];

$consulta = "update bankbier set bb_saldo='".$bb_saldo."' where bbCelular='".$bbCelular."'";

if(mysqli_query($conexao, $consulta))
{
     echo "Cadastro atualizado com sucesso!";
}
else
{
     echo "Não foi possivel atualizar o cadastro.";
	 
	 echo mysqli_error($conexao);
}

mysqli_close($conexao);

?>