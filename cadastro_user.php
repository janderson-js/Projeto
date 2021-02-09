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
                    <img src="img/PHP vitrine Logotipo.png" alt="logo" id="logo_top" width="100%" height="100%">
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
                    <a href="#">
                        <div id="carro"><i class="fas fa-shopping-cart"></i></div>
                        <div id="texto_carro"><span>ver carrinho</span></div>
                    </a>
                </div>
                <div id="login">
                    <button  id="btn_teste" type="button"><i class="far fa-user-circle"></i></button>
                    <div id="dados1" class="dados">
                    <ul>
                        <li><a href="#">Meus dados</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div id="conteudo">
            <div id="funcionalidade2">
                <div id="cadastro_user" class="cadastro_tabela">
                    <a href="index.php"><button id="cadastra_btn_volta"><span>Voltar</span></button></a>
                    <h1>Cadastro de Usuarios</h1>
                    <form method="post" action="processa_cadastra_user.php" enctype="multipart/form-data">
                        <table id="tabela_cadastro_user" class="tabela">
                            <tr>
                                <td colspan="2" align="center">Dados:</td>
                            </tr>
                            <tr>
                                <td>Nome:</td>
                                <td><input type="text" name="nome" placeholder="Ex: José" require></td>
                            </tr>
                            <tr>
                                <td>Sobrenome:</td>
                                <td><input type="text" name="sobrenome" placeholder="Ex: Souza da Silva" require></td>
                            </tr>
                            <tr>
                                <td>email:</td>
                                <td><input type="email" name="email" autocomplete="off"   placeholder="Ex:josésouza@gmail.com" require></td>
                            </tr>
                            <tr>
                                <td>Senha:</td>
                                <td><input type="password" name="senha" placeholder="*********" require></td>
                            </tr>
                            <tr>
                                <td>Telefone:</td>
                                <td><input type="text" name="telefone" placeholder="Ex: 61 9 0000-0000" require></td>
                            </tr>
                            <tr>
                                <td>Telefone de contato:</td>
                                <td><input type="text" name="telefoneContato" placeholder="Ex: 61 9 0000-0000" require></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">Endereço:</td>
                            </tr>
                            <tr>
                                <td>Cep:</td>
                                <td><input type="text" name="cep" placeholder="Ex: 72621-411" require></td>
                            </tr>
                            <tr>
                                <td>Cidade:</td>
                                <td><input type="text" name="cidade" placeholder="Ex: Brasilia" require></td>
                            </tr>
                            <tr>
                                <td>Bairro:</td>
                                <td><input type="text" name="bairro" placeholder="Ex: Recanto das Emas" require></td>
                            </tr>
                            <tr>
                                <td>Quadra/rua:</td>
                                <td><input type="text" name="quadraRua" placeholder="Ex:Qd 300 / Rua 2" require></td>
                            </tr>
                            <tr>
                                <td>Numero:</td>
                                <td><input type="text" name="numero" placeholder="Ex: casa 2" require></td>
                            </tr>
                            <tr>
                                <td>Complemento:</td>
                                <td><input type="text" name="complemento" placeholder="Ex: proximo a escola" ></td>
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
            sadasd
        </div>
    </body>
</html>