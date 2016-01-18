<?php
  // abrir conexao e selecionar o banco de dados
	$conexao = mysqli_connect('localhost','root','123mudar','bd_crud_alunos');
	//mysqli_select_db('bd_crud_alunos',$conexao);
  // tratamento de erros
  if (mysqli_connect_errno())
  {
	echo "Não foi possível conectar: " . mysqli_connect_error()."<br>";
  }  
?>
