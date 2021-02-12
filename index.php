<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/fotmata.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <script defer src="js/teste.js"></script>
    </head>
    <body>
        <div id="top">
            <a href="index.php">
                <div id="logo">
                    <h1 class="texto_logo">PHP</h1>
                    <p class="texto_logo_p">Vitrine</p>
                </div>
            </a>
            <div id="pesquisar">
                <div id="faz_pesquisa">
                    <form action="index.php">
                        <label for="" id="lbl_form_pesquisar">
                            <input type="text" autocomplete="off" name="pesquisa" placeholder="Pesquisar..." >
                            <button type="submit"><i class="fas fa-search"></i></i></button>
                        </label>
                    </form>
                </div>
            </div>
            <div id="conteiner_interacao">
                <div id="carrinho">
                    <div id="carro"><i class="fas fa-shopping-cart"></i></div>
                        <div id="texto_carro">
                            <a href="valida_login.php"><p><span><strong>ver carrinho</strong></span></p></a>
                            <p><span><?php include "status_itens_carrinho.php";?></span></p>
                        </div>
                </div>
                <div id="login">
                    <button  id="btn_teste" type="button"><i class="far fa-user-circle"></i></button>
                    <div id="dados1" class="dados">
                        <?php include "menu.php";?>
                    </div>
                </div>
                <div id="boasVindas">
                        <?php include "boas_vindas.php";?>
                </div>
            </div>
        </div>
        <div id="conteudo">
            <div id="div_lateral_esquerda">
                <h1>Modelos</h1>
                <ul>
                    <li><a href="index.php?marca=<?php echo false;?>"> Mostrar Todos</a></li>
                    <?php
                    
                    $conectar = mysqli_connect("localhost","root","","php_vitrine");

                    $sql_qtd = "SELECT  COUNT(marca)
                                                FROM produtos
                                                GROUP BY marca
                                                HAVING (COUNT(*) > 0)
                                                ";

                    $sql_consulta_marca = "SELECT cod_prod, marca, COUNT(marca)
                                FROM produtos
                                GROUP BY marca
                                HAVING (COUNT(*) > 0)
                                ";

                    $result_qtd = mysqli_query ($conectar, $sql_qtd);

                    $resultado_marca = mysqli_query ($conectar, $sql_consulta_marca);

                    while($consulta = mysqli_fetch_row($result_qtd)){
                        $consulta_marca = mysqli_fetch_row($resultado_marca);
                    ?>
                        <li><a href="index.php?marca=<?php echo "$consulta_marca[1]";?>"><?php echo "$consulta_marca[1]"."-($consulta[0])"; ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            
            <?php include "mostra.php";?>

            <a href="cadastra.php"><button id="btn_cadastrar"><span>Cadastrar</span></button> </a>
        </div>
        <div id="rodape">
            sadasd
        </div>
    </body>
</html>
