<?php
  // conctando ao BD
  include "conecta_mysql.php";

  $aluno_id = $_GET['id'];
  $aluno_nome = $_GET['nome'];
  $aluno_endereco = $_GET['endereco'];
  $aluno_telefone = $_GET['telefone'];

  // executando a operação de SQL
$SQL="UPDATE alunos SET 
	aluno_id=".$aluno_id.
	", aluno_nome='".$aluno_nome."'".
	", aluno_endereco='".$aluno_endereco."'".
	", aluno_telefone='".$aluno_telefone."'".
	" WHERE aluno_id=".$aluno_id;
echo  $SQL;
  $resultado = mysqli_query($conexao,$SQL ) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

  if($resultado === TRUE){
	echo "<br/>Usuário atualizado com sucesso!";
  } else {
        echo "<br/>Erro na atualização!";
  }
  // fechamento da conexão   
  mysqli_close($conexao);
?>
