<?php
    session_start();

    $conecta = mysqli_connect ("localhost", "root", "", "php_vitrine");

    $cod = $_SESSION["usuarios_cod_user"];

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y');

    $sql_venda = "INSERT INTO vendas (`cod_ven`,`usuarios_cod_user`,`data_ven`)
                                VALUES
                            (NULL,'$cod','$data')";
    $sql_ultima_venda = "SELECT max(cod_ven) AS id FROM vendas LIMIT 1;";

    $resultado_sql_venda = mysqli_query($conecta, $sql_venda);

    $resultado_sql_ultima_venda = mysqli_query($conecta,$sql_ultima_venda);

    $ultima_venda = mysqli_fetch_row($resultado_sql_ultima_venda);

    if($resultado_sql_venda){
        $sql_venda_produto = "UPDATE produtos 
                              SET vendas_cod_ven = '$ultima_venda[0]',
                                  status_prod = 'V'
                              WHERE usuarios_cod_user = '$cod'
                              AND status_prod = 'F'";
        $resultado_sql_venda_produto = mysqli_query($conecta,$sql_venda_produto);

        if($resultado_sql_venda_produto){
            echo "<script>
                location.href = ('recibo.php')
            </script>";
        }
    }else{
        echo "<script>
                alert('OPS... Algo deu Errado!!')
            </script>";
        echo "<script>
                location.href = ('ver_carrinho_compra.php')
            </script>";
    }

    
?>