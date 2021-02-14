<?php
    session_start();    

    $cod_user = $_SESSION["usuarios_cod_user"];

    $conectar = mysqli_connect("localhost","root","","php_vitrine");

    $sql_status_usuarios = "SELECT status_user FROM usuarios
                            WHERE cod_user = '$cod_user'";

    $resultado_sql_status_usuarios = mysqli_query($conectar,$sql_status_usuarios);

    $status_usuarios = mysqli_fetch_row($resultado_sql_status_usuarios);

    if($status_usuarios[0] != "administracao"){
        
        $nome =  $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $telefone = $_POST["telefone"];
        $telefoneContato = $_POST["telefoneContato"];

        $cep = $_POST["cep"];
        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $quadraRua = $_POST["quadraRua"];
        $numero_casa = $_POST["numero"];
        @$complemento = $_POST["complemento"];

        $sql_altera_dados_user = "UPDATE usuarios
                        SET nome = '$nome',
                            sobrenome = '$sobrenome'
                        WHERE cod_user = '$cod_user'";

        $sql_altera_dados_login = "UPDATE logins
                        SET email = '$email',
                            senha = '$senha'
                        WHERE usuarios_cod_user = '$cod_user'";

        $sql_altera_dados_telefone = "UPDATE telefone
                        SET telefone = '$telefone',
                            tele_contato = '$telefoneContato'
                        WHERE usuarios_cod_user = '$cod_user'";
        $sql_altera_dados_endereco = "UPDATE endereco
                        SET cep = '$cep',
                            cidade = '$cidade',
                            bairro = '$bairro',
                            quadraRua = '$quadraRua',
                            numero_casa = '$numero_casa',
                            complemento = '$complemento'
                        WHERE usuarios_cod_user = '$cod_user'";

        $resultado_altera_dados_user = mysqli_query($conectar,$sql_altera_dados_user);
        $resultado_altera_dados_login = mysqli_query($conectar,$sql_altera_dados_login);
        $resultado_altera_dados_telefone = mysqli_query($conectar,$sql_altera_dados_telefone);
        $resultado_altera_dados_endereco = mysqli_query($conectar,$sql_altera_dados_endereco);

        if($resultado_sql_status_usuarios && $resultado_altera_dados_login 
        && $resultado_altera_dados_telefone && $resultado_altera_dados_endereco){
            echo "<script> 
                alert ('$nome Alterado com Sucesso !!') 
            </script>";
            echo "<script> 
					location.href = ('meus_dados.php')
			  </script>";
        }

    }else{
        $senha = $_POST["senha"];
    }
?>