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
                <div id="login_user">
                    <div id="for_login">
                        <form method="post" action="processa_login.php">
                            <label for="" class="lbl">
                                <i class="fas fa-user"></i>
                                <input type="text" name="login" placeholder="Login:" required>
                            </label>
                            <label for="" class="lbl">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="senha" placeholder="******" required>
                            </label>
                            <input type="submit" value="Entrar"  id="btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="rodape">
            sadasd
        </div>
    </body>
</html>