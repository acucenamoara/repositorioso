<?php
include("config.php"); 
$codigo = $_GET['codigo'];
$erro=0;
if(isset($_POST['nome'])){
	extract($_POST);
	if($consulta = $conexao->query("update tb_fornecedores set for_nomeemp = '$nome', for_est_codigo = '$estado', for_telefone = '$telefone', for_descricao = '$descricao', for_email = '$email' where for_codigo = $codigo;")) {
		header("Location: fornecedor.php");
	} else {
		$erro=1;
	}
}

$consulta2 = $conexao->query("select * from tb_fornecedores where for_codigo = $codigo");
$resultado2 = $consulta2->fetch_assoc()
?>
<html>
<head>
	<title>Criar conta</title>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="style.css">
	<meta charset="utf8">
	<?php if($erro==1) { echo "<div>erro</div>"; } ?>
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
		<form method="POST" action="?codigo=<?php echo $resultado2['for_codigo']; ?>">

		Nome:<br>	
		<input type="varchar(45)" name="nome" placeholder= "Digite seu nome" size="40" required value="<?php echo $resultado2['for_nomeemp']; ?>"><br><br>

		Estado:<br>	
		<input type="int" name="estado" placeholder= "Digite o estado" required value="<?php echo $resultado2['for_est_codigo']; ?>"><br><br>

		Telefone:<br>
		<input type="varchar(45)" name="telefone" placeholder= "Digite seu telefone" required value="<?php echo $resultado2['for_telefone']; ?>"><br><br>

		E-mail:<br>
		<input type="email" name="email" placeholder="Digite seu e-mail" size="40" required value="<?php echo $resultado2['for_email']; ?>"><br><br>

		Descrição da empresa:<br>
		
		<input type="varchar(200)" name="descricao"  size="40" required value="<?php echo $resultado2['for_descricao']; ?>"><br><br>
		
		<input class= "button" type="submit" value="Enviar">
		<br>			
	</div>
</form>
</body>
</html>