<?php
include("config.php"); 

if(isset($_POST['nome'])) {
	extract($_POST);
	if($consulta = $conexao->query("insert into tb_fornecedores (for_nomeemp, for_est_codigo, for_telefone, for_email, for_descricao) 
	values ('$nome' , '$estado' ,'$telefone' ,'$email' ,'$descricao' );")) {
		header("Location: fornecedor.php");
	} else {
		echo "Erro no cadastro";
	}
}
?>
<html>
<head>
	<title>Criar conta</title>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="superior">
			<h1> A.S fornecedores </h1>
		</div>
		<div class="menu">
			<a href="fornecedor.php"><button>Voltar</button></a>
		</div>	
	</div>
	<div class="cadastro">
		<h3>Criar conta</h3><br>
		<form method="POST" action="?">

		Nome:<br>	
		<input type="varchar(45)" name="nome" placeholder= "Digite seu nome" size="40"><br><br>

		Estado:<br>	
		<input type="int" name="estado" placeholder= "Digite o estado"><br><br>

		Telefone:<br>
		<input type="varchar(45)" name="telefone" placeholder= "Digite seu telefone"><br><br>

		E-mail:<br>
		<input type="email" name="email" placeholder="Digite seu e-mail" size="40"><br><br>

		Descrição da empresa:<br>
		
		<input type="varchar(200)" name="descricao"  size="40"><br><br>
		
		<input type="submit" value="Enviar">
		<br>			
	</div>
</form>
</body>
</html>