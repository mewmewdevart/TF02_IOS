<?php
$modelo = $_GET['modelo'];
$capacidade = $_GET['capacidade'];
$empresa = $_GET['empresa'];
$carga = $_GET['carga'];
echo "$modelo Cadastrado com Sucesso";

$conexao = mysqli_connect('localhost','root','','bd_avioes');
$query = "INSERT INTO tb_avioes (modelo, capacidade, empresa, carga) values ('{$modelo}','{$capacidade}','{$empresa}','{$carga}')";

mysqli_query($conexao, $query);


?>