<?php

    if(isset($_SESSION["usuarios_cod_user"])){?>
        <ul>
            <li><a href="meus_dados.php">Meus Dados</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
<?php    }else{?>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="cadastro_user.php">Cadastrar</a></li>
            </ul>
<?php        
    }

?>