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
        <script defer src="js/div-hidden-show.js"></script>
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
                    <p>Estoque</p>
                </div>
            </div>
            <div id="conteiner_interacao">
                <div id="carrinho">
                    <div id="texto_carro">
                    </div>
                </div>
                <div id="login">
                    <button  id="btn_teste" type="button"><i class="far fa-user-circle"><br><span>Perfil</span></i></button>    
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
            <div id="div_estoque">
                <a href="administracao.php"><button><i class='fas fa-long-arrow-alt-left'></i> Administração </button></a>
                <h1>Produtos em Estoque</h1>
                <a href="cadastra.php"><button> Cadastrar Produto <i class="fas fa-long-arrow-alt-right"></i></button></a>
                <div id="div_lista_prod">
                    <?php include "mostrar_estoque.php" ?>
                </div>
                <div id="valor_estoque">
                        <p>Valor em estoque: <span><?php echo number_format($valor_estoque, 2, ',', '.')."$";?></span></p>
                </div>
            </div>
        <div id="rodape">
            <?php include "rodape.php";?>
        </div>
    </body>
</html>
