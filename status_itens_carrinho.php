<?php
    session_start();
    if(isset($_SESSION["usuarios_cod_user"])){
        $conectar = mysqli_connect("localhost","root","","php_vitrine");
        $cod = $_SESSION["usuarios_cod_user"];
        $sql_qtd_no_carrinho = "SELECT  COUNT(usuarios_cod_user) FROM produtos
                                    WHERE  usuarios_cod_user = '$cod'
                                    GROUP BY usuarios_cod_user
                                    HAVING (COUNT(*) > 0)";
    
        $result_qtd_no_carrinho = mysqli_query ($conectar, $sql_qtd_no_carrinho);
    
        $qtd_no_carrinho = mysqli_fetch_row($result_qtd_no_carrinho);
    
    
        if(empty($qtd_no_carrinho)){
            echo "Esta vazio.";
        }elseif($qtd_no_carrinho[0] == 1){
            echo "$qtd_no_carrinho[0] Produto";
        }else{
            echo "$qtd_no_carrinho[0] Produtos";
        }
    }else{
        echo "Esta vazio.";
    }
?>

