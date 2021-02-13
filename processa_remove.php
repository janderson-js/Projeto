<?php
    $cod = $_GET["cod"];

    $conectar = mysqli_connect("localhost","root","","php_vitrine");

    $sql_remove_do_carrinho = "UPDATE produtos 
                            SET usuarios_cod_user = 'NULL',
                                status_prod = 'N'
                            WHERE cod_prod = '$cod'";

    $resultado_sql_remove_do_carrinho = mysqli_query($conectar,$sql_remove_do_carrinho);

    if($resultado_sql_remove_do_carrinho == true){
        echo "<script>
                alert(' Produto Removido com sucesso!!! ')
            </script>";
        echo "<script>
                location.href = ('ver_carrinho_compra.php')
            </script>";
    }
?>