<?php
include("config.php");
if(isset($_GET['excluir'])){
  $codigo = $_GET['excluir'];
  if($consulta = $conexao->query("delete from tb_fornecedores where for_codigo = $codigo")) {
    header("Location: fornecedor.php");
  } else {
    echo "Erro na exclusão";
  }
}
$consulta= $conexao->query("select * from tb_fornecedores join  tb_estados on for_est_codigo= est_codigo order by for_codigo");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
    <title>A.S fornecedores</title>
</head>
<body>
    <div class="container">
      <div class= "superior">
        <h1> A.S fornecedores </h1>
      </div>
      <div class="menu">
        <a href="index.php"><button> Voltar </button></a>
      </div>
    </div>
    <div class="container3">
      <div class="subtitulo">
        <h3>Cadastro fornecedores</h3>
        <hr>
      </div>    
    <div class="usuario"> 
     <table>
        <tr style="background-color:#ccc">
          <th>Nome</th>
          <th>Descrição</th>
          <th>Estado</th>
          <th>Telefone</th>
          <th>Email</th>     
        </tr>
        <?php while($resultado = $consulta->fetch_assoc()){ ?>
        <tr>
        <td><?php echo $resultado['for_nomeemp']; ?></td>
        <td><?php echo $resultado['for_descricao']; ?></td>
        <td><?php echo $resultado['est_estado']; ?></td>
        <td><?php echo $resultado['for_telefone']; ?></td>
        <td><?php echo $resultado['for_email']; ?></td>
        <td>&nbsp;<a href="fornecedores-editar.php?codigo=<?php echo $resultado['for_codigo']; ?>"><img src="images/editar.png" width="16"></a> | 
      <a href="?excluir=<?php echo $resultado['for_codigo']; ?>" onclick="return confirm('Deseja realmente apagar?');"><img src="images/excluir.png" width="16"><a/>&nbsp;</td>
    </tr>
  <?php } ?>
  </table><br><br>
  <a href="fornecedores-novo.php"><button>Adicionar Novo</button></a>
</html>
     </table>
    </div>
    </div>
</body>
</html>