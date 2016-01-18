<?php

    $opcao = $_POST['tipoCRUD'];


    switch($opcao)
    {
        case "C":
	?>
 		<h3>CRIAR</h3>
                <form action='create.php' method='GET'>
                    ID: <input type='text' name='id'/><br/>
                    Nome: <input type='text' name='nome'/><br/>
                    Endereco: <input type='text' name='endereco'/><br/>
		    Telefone: <input type='text' name='telefone'/><br/>
                    <input type='submit' value='INSERIR'/>
                </form>
	<?php
        break;
        
                
        case "R":
            ?>
		<h3>BUSCAR</h3>
                <form action='read.php' method='GET'>
                    <input type='submit' value='BUSCAR'/>
                </form>
	<?php
        break;
        
        case "U":
		?>
            	<h3>ATUALIZAR</h3>
                <form action='update.php' method='GET'>
                  ID: <input type='text' name='id'/><br/>
                    Nome: <input type='text' name='nome'/><br/>
                    Endereco: <input type='text' name='endereco'/><br/>
		    Telefone: <input type='text' name='telefone'/><br/>
                    <input type='submit' value='ATUALIZAR'/>
                </form>
	<?php
        break;
        
        case "D":
		?>
       		<h3>APAGAR</h3>
                <form action='delete.php' method='GET'>
                     ID: <input type='text' name='id'/><br/>
                    <input type='submit' value='REMOVER'/>
                </form>"
	<?php
        break; 
    }

?>
