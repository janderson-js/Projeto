<?php
    session_start();

    if(isset($_SESSION["usuarios_cod_user"])){
        
        $cod = $_GET["cod"];
        $cod_user = $_SESSION["usuarios_cod_user"];

        $conecta = mysqli_connect ("localhost", "root", "", "php_vitrine");

        $sql_coloca_no_carrinho = "UPDATE produtos 
                                    SET usuarios_cod_user = '$cod_user',
                                        status_prod = 'F'
                                    WHERE cod_prod = '$cod'";
                                        
        $resultado_sql = mysqli_query($conecta,$sql_coloca_no_carrinho);

        if($resultado_sql  == true){
            echo "<script>
                location.href = ('adiciona.carrinho_compra.php?cod=$cod');
            </script>";
        }


    }else{
        echo "<script>
                alert('Você não Esta logado!!! \\n \\n FAÇA O LOGIN OU CADASTRE-SE');
        </script>";

        echo "<script>
                location.href = ('index.php');
        </script>";
    }
?>
