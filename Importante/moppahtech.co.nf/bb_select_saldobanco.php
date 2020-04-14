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

$gravacoes = mysqli_query($conexao,"select sum((bb_Tipo_1*300)+(bb_Tipo_2*600)) from bankbier where bbCelular <> ".$bbCelular);


$dados = array();

while($linha = mysqli_fetch_assoc($gravacoes))
{
    $dados[] = $linha; 
}

echo json_encode($dados);

mysqli_close($conexao);

?>