<?php
	session_start();

	$conecta = mysqli_connect ("localhost", "root", "", "php_vitrine");
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];	
	
	$sql_consulta = "SELECT  usuarios_cod_user,email, senha FROM logins
					 WHERE 
					       email = '$login' 
					 AND 
						   senha = '$senha'";
			 
	$result_consulta = mysqli_query($conecta, $sql_consulta);

	$linhas = mysqli_num_rows($result_consulta);

	if ($linhas == 1) {	
		$dados = mysqli_fetch_row($result_consulta);

        $_SESSION["usuarios_cod_user"] = $dados[0];
		$_SESSION["email"] = $dados[1];
		$_SESSION["senha"] = $dados[2];
		
		$sql_status_user = "SELECT status_user FROM usuarios
									WHERE cod_user = '$dados[0]'";
		
        $result_sql_status_user = mysqli_query($conecta,$sql_status_user);

		$status_user = mysqli_fetch_row($result_sql_status_user);

		if($status_user[0] == "administrador"){
			
			$_SESSION["staus_user"] = $status_user[0];

			echo "<script> 
				  alert ('Bem-Vindo Administrador!!') 
			  	</script>";
			echo "<script> 
						location.href = ('administracao.php')
				</script>";
		}else{

			echo "<script> 
				  alert ('Bem-Vindo!!') 
			  	</script>";
			echo "<script> 
						location.href = ('index.php')
				</script>";
		}
	}
	else {

		echo "<script> 
				  alert ('Usuario ou Senha Incorretos! Digite Novamente!!') 
			  </script>";
		echo "<script> location.href = ('login.php') </script>";
	}
?>