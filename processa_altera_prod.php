<?php
    session_start();

    $conectar = mysqli_connect("localhost","root","","php_vitrine");

    $cod_prod = $_GET["cod_prod"];

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $foto = $_FILES["foto"];
	
	$foto_nome = "img/".$foto["name"];
	move_uploaded_file($foto["tmp_name"], $foto_nome);

  $sql_altera_prod = "UPDATE produtos
                      SET  marca = '$marca',
                           modelo = '$modelo',
                           preco = '$preco',
                           descricao = '$descricao',
                           foto = '$foto_nome'
                      WHERE cod_prod = '$cod_prod' ";
    
    $sql_result_altera_prod = mysqli_query($conectar,$sql_altera_prod);

    if($sql_result_altera_prod == true){
        echo "<script>
				alert ('$marca Alterado com sucesso') 
			  </script>";
		 echo "<script>
		 		location.href = ('estoque.php') 
		 	  </script>";		
    }else{
        echo "<script> 
				alert ('ocorreu um erro no servidor ao tentar Alterar') 
			  </script>";
		
        echo "<script> 
              location.href = ('altera_prod.php') 
            </script>";
    }
?>