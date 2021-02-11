<?php
	session_start();

	/* conexÃ£o com o banco de dados */
	$conecta = mysqli_connect ("localhost", "root", "", "php_vitrine");
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];	

	/* realiza a consulta no banco de dados */	
	$sql_consulta = "SELECT  usuarios_cod_user,email, senha FROM logins
					 WHERE 
					       email = '$login' 
					 AND 
						   senha = '$senha'";
						   
	/* armazena  o resultado da consulta do banco de dados */				 
	$result_consulta = mysqli_query($conecta, $sql_consulta);

	/* retorna um valor caso encontre as informaÃ§Ãµes no banco de dados */
	$linhas = mysqli_num_rows($result_consulta);
	
	/* faz a verificaÃ§Ã£o do retorno do banco de dados 
	e redireciona para proxima pagina caso estaja todo certo ou emite uma menssagem 
	caso os dados nÃ£o estejam no banco  */

	if ($linhas == 1) {	
		$dados = mysqli_fetch_row($result_consulta);

        $_SESSION["usuarios_cod_user"] = $dados[0];
		$_SESSION["email"] = $dados[1];
		$_SESSION["senha"] = $dados[2];	
		
        echo "<script> 
				  alert ('Bem-Vindo!!') 
			  </script>";
		echo "<script> 
					location.href = ('index.php')
			  </script>";
	}
	else {
		echo "<script> 
				  alert ('Usuario ou Senha Incorretos! Digite Novamente!!') 
			  </script>";
		echo "<script> location.href = ('login.php') </script>";
	}
?>