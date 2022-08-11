<?php
include("config.php");
$erro=0;
if(isset($_POST['usuario'])){
	extract($_POST);
	if($usuarioadm == $usuario && $senhaadm == $senha){
		$_SESSION['codigo'] = 1;
		header("Location: fornecedor.php");
	}
	else {
		$erro = 1;
	}
}
?>
<html>
<head>

	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<?php if($erro == 1) echo "<span style='color:red'>Usuário ou senha inválidos</span>" ?>

</head>
<body>
	<div class="container">
		<div class= "superior">
			<h1> A.S fornecedores </h1>
		</div>
		<div class="menu">
			<a href="index.php"><button>Voltar</button></a>
		</div>
	</div>
		<div class= "meio">
			<div class= "fundologin">
				<form method="POST" action="?">
					<input class="fundologin" type="text" name= "usuario" placeholder="Email ou telefone" autofocus />
					<br>
					<input class="fundologin" type="password" name= "senha" placeholder="Senha"/>
					<br>
					<input class="botaoentrar" type="submit" value="Entrar"><br><br>
				</form>
			</div>
		</div>
	</body>
</html>