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
                    <a href="estoque.php"><button>Voltar</button></a>
                    <h1 class="titulo">Cadastro de Produtos</h1>

                    <?php
                        $cod_prod = $_GET["cod_prod"];

                        $slq_consulta_prod = "SELECT * FROM produtos
                                                    WHERE cod_prod = '$cod_prod'";
                        $result_consulta_prod = mysqli_query($conecta,$slq_consulta_prod);

                        $dados_prod = mysqli_fetch_row($result_consulta_prod);

                    ?>

                    <form method="post" action="processa_altera_prod.php?cod_prod=<?php echo "$cod_prod";?>" enctype="multipart/form-data">
                        <table id="tabela">
                            <tr>
                                <td>Marca:</td>
                                <td><input type="text" name="marca" placeholder="Marca" value="<?php echo "$dados_prod[3]";?>"></td>
                            </tr>
                            <tr>
                                <td>Modelo:</td>
                                <td><input type="text" name="modelo" placeholder="Modelo" value="<?php echo "$dados_prod[4]";?>"></td>
                            </tr>
                            <tr>
                                <td>Preço:</td>
                                <td><input type="text" name="preco" placeholder="Preço" value="<?php echo "$dados_prod[5]";?>"></td>
                            </tr>
                            <tr>
                                <td>Descrição:</td>
                                <td><textarea type="text" name="descricao" placeholder="Descricao" ><?php echo "$dados_prod[6]";?></textarea></td>
                            </tr>
                            <tr>
                                <td>Foto:</td>
                                <td> <p> <input type="file" name="foto" required> </p> </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><button type="reset"  class="btn">Limpar</button> <button type="submit"  id="btn_cadastra" class="btn">Alterar</button></td>
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