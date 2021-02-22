<?php

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
            <div id="funcionalidade2">
                <div id="cadastro">
                    <a href="estoque.php"><button>Voltar ao Estoque</button></a>
                    <h1 class="titulo">Cadastro de Produtos</h1>
                    <form method="post" action="processa_cadastra.php" enctype="multipart/form-data">
                        <table id="tabela">
                            <tr>
                                <td>Marca:</td>
                                <td><input type="text" name="marca" placeholder="Marca"></td>
                            </tr>
                            <tr>
                                <td>Modelo:</td>
                                <td><input type="text" name="modelo" placeholder="Modelo"></td>
                            </tr>
                            <tr>
                                <td>Preço:</td>
                                <td><input type="text" name="preco" placeholder="Preço"></td>
                            </tr>
                            <tr>
                                <td>Descrição:</td>
                                <td><textarea type="text" name="descricao" placeholder="Descricao"></textarea></td>
                            </tr>
                            <tr>
                                <td>Foto:</td>
                                <td> <p> <input type="file" name="foto" required> </p> </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><button type="reset"  value="Limpar campos" class="btn">Limpar</button> <button type="submit" value="Cadastrar" id="btn_cadastra" class="btn">Cadastrar</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div id="rodape">
            <?php include "rodape.php";?>
        </div>
    </body>
</html>