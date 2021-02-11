<?php

    if(isset($_SESSION["usuarios_cod_user"])){?>
        <ul>
            <a href="meus_dados.php"><li>Meus Dados</li></a>
            <a href="logout.php"><li>Sair</li></a>
        </ul>
<?php    }else{?>
            <ul>
                <a href="login.php"><li>Login</li></a>
                <a href="cadastro_user.php"><li>Cadastrar</li></a>
            </ul>
<?php        
    }

?>