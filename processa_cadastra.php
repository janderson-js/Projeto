<?php
    session_start();

    $conectar = mysqli_connect("localhost","root","","vitrine_php");

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $foto = $_FILES["foto"];
	
	$foto_nome = "img/".$foto["name"];
	move_uploaded_file($foto["tmp_name"], $foto_nome);

    $sql_cadastra = "INSERT INTO produtos (marca, modelo, preco, descricao,foto)
                        VALUES
                    ('$marca','$modelo','$preco','$descricao','$foto_nome')";
    
    $sql_result_cadastra = mysqli_query($conectar,$sql_cadastra);

    if($sql_result_cadastra == true){
        echo "<script>
				alert ('$marca cadastrado com sucesso') 
			  </script>";
		 echo "<script>
		 		location.href = ('cadastra.php') 
		 	  </script>";		
    }else{
        echo "<script> 
				alert ('ocorreu um erro no servidor ao tentar cadastrar') 
			  </script>";
		
		echo "<script> 
				location.href = ('cadastra.php') 
			  </script>";
    }
?>