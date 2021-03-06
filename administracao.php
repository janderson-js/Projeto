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
                    <p>Administração</p>
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
            <div id="div_administracao">
                <div id="estoque">
                    <h1> Estoque</h1>
                    <div id="infos">
                        <div id="qtd_estoque">
                            <p><a href="estoque.php"><i class="fas fa-boxes"></i><br><span>Ver estoque</span></a></p>
                        </div>
                        <div id="cadastrar_estoque">
                            <p><a href="cadastra.php"><i class="fas fa-clipboard-list"></i><br><span>Cadastrar Produto</span></a></p>
                        </div>
                    </div>
                    <a href="estoque.php"><button>Gerenciar Estoque <i class="fas fa-long-arrow-alt-right"></i></button></a>
                </div>
            </div>
            <div id="div_administracao">
                <div id="estoque">
                    <h1>Vendas</h1>
                    <div id="infos">
                        <div id="qtd_estoque">
                            <p><a href="vendas.php"><i class="fas fa-dollar-sign"></i><br><span>Ver Vendas</span></a></p>
                        </div>
                        <div id="cadastrar_estoque">
                            <p><a href="faturamento.php"><i class="fas fa-wallet"></i><br><span>Faturamento</span></a></p>
                        </div>
                    </div>
                    <a href="#"><button>Gerenciar Vendas <i class="fas fa-long-arrow-alt-right"></i></button></a>
                </div>
            </div>
        </div>
        <div id="rodape">
            <?php include "rodape.php";?>
        </div>
    </body>
</html>
