<?php
$id = $_GET['id'];
echo "O id apagado foi $id";

$conexao = mysqli_connect('localhost','root','','bd_avioes');
$query = "DELETE FROM tb_avioes WHERE id = $id";

return mysqli_query($conexao, $query);

?>