<?php

    if(isset($_SESSION["usuarios_cod_user"])){
        $cod_user = $_SESSION["usuarios_cod_user"];

        $conecta = mysqli_connect ("localhost", "root", "", "php_vitrine");

        $sql_consulta = "SELECT * from usuarios 
                        WHERE cod_user = '$cod_user'";

        $result_consulta = mysqli_query($conecta, $sql_consulta);

        $dados = mysqli_fetch_row($result_consulta);

        echo "<p>Bem-Vindo - $dados[1] $dados[2]</p>";
    }else{
        echo "Faça o login ou Cadastre-se ";
    }

?>