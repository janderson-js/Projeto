<?php 
    //dados

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $telefoneContato = $_POST["telefoneContato"];

    //endereço

    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $quadraRua = $_POST["quadraRua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];


    $conecta = mysqli_connect("localhost","root","","php_vitrine");
    
    $sql_cadastra_user = "INSERT INTO usuarios (`cod_user`,`nome`,`sobrenome`) VALUES (NULL,'$nome','$sobrenome')";

    $sql_pega_cod_user = "SELECT max(cod_user) AS id FROM usuarios LIMIT 1";

    $resul_cadastra_user = mysqli_query ($conecta, $sql_cadastra_user);

    $resul_pega_cod_user = mysqli_query ($conecta, $sql_pega_cod_user);

    $recebe_cod_user = mysqli_fetch_row($resul_pega_cod_user);


    if ($resul_cadastra_user) { 

        $cod_user = $recebe_cod_user[0];

         $sql_cadastra_login_user = "INSERT INTO logins (`cod_log`,`usuarios_cod_user`,`email`,`senha`) VALUES (NULL,'$cod_user','$email','$senha')";

         $sql_cadastra_telefone_user = "INSERT INTO telefone (`cod_tele`,`usuarios_cod_user`,`telefone`,`tele_contato`)
          VALUES (NULL,'$cod_user', '$telefone','$telefoneContato')";

         $sql_cadastra_endereco_user = "INSERT INTO endereco (`cod_end`,`usuarios_cod_user`,`cep`,`cidade`,`bairro`,`quadraRua`,`numero_casa`,`complemento`) 
          VALUES (NULL,'$cod_user','$cep','$cidade','$bairro','$quadraRua','$numero','$complemento')";	

          $resul_cadastra_telefone = mysqli_query($conecta, $sql_cadastra_telefone_user);
          $resul_cadastra_endereco = mysqli_query($conecta, $sql_cadastra_endereco_user);
          $resul_cadastra_login = mysqli_query($conecta, $sql_cadastra_login_user);

        echo "<script> 
                alert ('$nome cadastrado com sucesso') 
              </script>";
        echo "<script> 
               location.href = ('index.php') 
             </script>";	
    }else { 		
        echo "<script> 
                 alert ('ocorreu um erro no servidor. Tente de novo') 
             </script>";

        // echo "<script> 
        //          location.href = ('cadastro_user.php') 
        //      </script>";	
    }	  
?>