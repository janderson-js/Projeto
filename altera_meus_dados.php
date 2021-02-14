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
            <div id="funcionalidade2">
                <div id="cadastro_user" class="cadastro_tabela">
                    <?php
                        $cod_user_dados = $_SESSION["usuarios_cod_user"];

                        $sql_meus_dados_user = "SELECT * FROM usuarios
                                                    WHERE cod_user = '$cod_user_dados'";

                        $sql_meus_dados_login = "SELECT email, senha FROM logins
                        WHERE usuarios_cod_user = '$cod_user_dados'";

                        $sql_meus_dados_endereco = "SELECT * FROM endereco
                        WHERE usuarios_cod_user = '$cod_user_dados'";

                        $sql_meus_dados_telefone = "SELECT * FROM  telefone
                                                            WHERE usuarios_cod_user = '$cod_user_dados'";

                        $resultado_sql_meus_dados_user = mysqli_query($conecta,$sql_meus_dados_user);

                        $resultado_sql_meus_dados_login = mysqli_query($conecta,$sql_meus_dados_login);

                        $resultado_sql_meus_dados_endereco = mysqli_query($conecta,$sql_meus_dados_endereco);

                        $resultado_sql_meus_dados_telefone = mysqli_query($conecta,$sql_meus_dados_telefone);

                        $dados_user = mysqli_fetch_row($resultado_sql_meus_dados_user);

                        $dados_login = mysqli_fetch_row($resultado_sql_meus_dados_login);

                        $dados_telefone = mysqli_fetch_row($resultado_sql_meus_dados_telefone);

                        $dados_endereco = mysqli_fetch_row($resultado_sql_meus_dados_endereco);
                    ?>
                    <a href="index.php"><button id="cadastra_btn_volta"><span>Voltar</span></button></a>
                    <h1>Cadastro de Usuarios</h1>
                    <?php 
                        if($dados_user[3] != "administrador"){?>
                            <form method="post" action="processa_cadastra_user.php" enctype="multipart/form-data">
                                <table id="tabela_cadastro_user" class="tabela">
                                    <tr>
                                        <td colspan="2" align="center">Dados:</td>
                                    </tr>
                                    <tr>
                                        <td>Nome:</td>
                                        <td>Sobrenome:</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="nome" value="<?php echo "$dados_user[1]";?>"></td>
                                        <td><input type="text" name="sobrenome" value="<?php echo "$dados_user[2]";?>"></td>
                                    </tr>
                                    <tr>
                                        <td>email:</td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" name="email" autocomplete="off"  value="<?php echo "$dados_login[0]";?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Senha:</td> 
                                    </tr>
                                    <tr>
                                        <td><input type="password" name="senha" value="<?php echo "$dados_login[1]";?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Telefone:</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="telefone" value="<?php echo "$dados_telefone[2]";?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Telefone de contato:</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="telefoneContato" value="<?php echo "$dados_telefone[3]";?>"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">Endereço:</td>
                                    </tr>
                                    <tr>
                                        <td>Cep:</td>
                                        <td>Cidade:</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="cep" value="<?php echo "$dados_endereco[2]";?>"></td>
                                        <td><input type="text" name="cidade" value="<?php echo "$dados_endereco[3]";?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Bairro:</td>
                                        <td>Quadra/rua:</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="bairro" value="<?php echo "$dados_endereco[4]";?>"></td>
                                        <td><input type="text" name="quadraRua" value="<?php echo "$dados_endereco[5]";?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Numero:</td>
                                        <td>Complemento:</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="numero" value="<?php echo "$dados_endereco[6]";?>"></td>
                                        <td><input type="text" name="complemento" value="<?php echo "$dados_endereco[7]";?>"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><a href="processa_altera_dados.php"><button type="submit" value="Cadastrar" id="btn_cadastra" class="btn">Alterar</button></a></td>
                                    </tr>
                            </table>
                        </form>
                    <?php }else{?>
                            <form method="post" action="processa_cadastra_user.php" enctype="multipart/form-data">
                                    <table id="tabela_cadastro_user" class="tabela">
                                        <tr>
                                            <td colspan="2" align="center">Dados:</td>
                                        </tr>
                                        <tr>
                                            <td>Nome:</td>
                                            <td>Sobrenome:</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="nome" value="<?php echo "$dados_user[1]";?>" disabled></td>
                                            <td><input type="text" name="sobrenome" value="<?php echo "$dados_user[2]";?>" disabled></td>
                                        </tr>
                                        <tr>
                                            <td>email:</td>
                                            <td>Senha:</td> 
                                        </tr>
                                        <tr>
                                            <td><input type="email" name="email" autocomplete="off"  value="<?php echo "$dados_login[0]";?>" disabled></td>
                                            <td><input type="password" name="senha" value="<?php echo "$dados_login[1]";?>"></td>
                                        </tr>      
                                        <tr>
                                            <td colspan="2" align="center"><a href="processa_altera_dados.php"><button type="submit" value="Cadastrar" id="btn_cadastra" class="btn">Alterar</button></a></td>
                                        </tr>
                                </table>
                            </form>
                   <?php }
                    ?>
                </div>
            </div>
        </div>
        <div id="rodape">
            sadasd
        </div>
    </body>
</html>