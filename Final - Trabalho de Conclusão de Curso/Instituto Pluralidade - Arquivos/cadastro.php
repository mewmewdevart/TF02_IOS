
<?php
	if (isset($_POST['senha']) && isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['endereco']) && isset($_POST['cpf']) && isset($_POST['email'])) {
	
	
	$se = $_POST['senha'];
	$no = $_POST['nome'];
	$sobr = $_POST['sobrenome'];
	$ende = $_POST['endereco'];
	$cpf = $_POST['cpf'];
	$ema = $_POST['email'];
	
	$conexao = mysqli_connect('127.0.0.1','root','','bd_cd');
	$query = "INSERT INTO tb_login(nome, sobrenome, cpf, endereco, senha, email) values ('{$se}','{$no}','{$sobr}','{$ende}','{$cpf}','{$ema}')";
	
	if(mysqli_query($conexao, $query)){
		echo "ok";
	}else{
		echo "erro";
	}

	}
?>