<?php
  // conctando ao BD
  include "conecta_mysql.php";

  $id = $_GET['id'];
  $nome = $_GET['nome'];
  $endereco = $_GET['endereco'];
  $telefone = $_GET['telefone'];
  
// executando a operação de SQL
$SQL="INSERT INTO alunos(aluno_id, aluno_nome, aluno_endereco , aluno_telefone ) VALUES (".$id.",'".$nome."','".$endereco."','".$telefone."')";
  $resultado = mysqli_query($conexao, $SQL) or die("Não foi possível executar a SQL.: ".mysqli_error($conexao))."<br> $SQL";

  if($resultado === TRUE){
	echo "<br/>Usuário inserido com sucesso!";
  } else {
        echo "<br/>Erro na inserção!";
  }
  // fechamento da conexão   
  mysqli_close($conexao);
?>
