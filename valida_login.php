<?php
    session_start();

    if(isset($_SESSION["usuarios_cod_user"])){
        
        echo "<script>
                location.href = ('ver_carrinho_compra.php');
        </script>";

    }else{
        echo "<script>
                alert('Você não Esta logado!!! \\n \\n FAÇA O LOGIN OU CADASTRE-SE');
        </script>";

        echo "<script>
                location.href = ('index.php');
        </script>";
    }
?>