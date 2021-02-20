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
                <div id="adicionarAoCarrinho">
                    <div id="div_titulo">
                        <h1 class="titulo_carrinho">Produto Adicionado com Sucesso !!!</h1>
                    </div>
                    <div id="produto">

                        <?php
                            $conecta = mysqli_connect ("localhost", "root", "", "php_vitrine");

                            $cod = $_GET["cod"];

                            $slq_consulta_produto = "SELECT * from produtos
                                        WHERE cod_prod = '$cod'
                                        AND  status_prod = 'F'
                                    ";
                            $resultado_consulta_produto = mysqli_query($conecta,$slq_consulta_produto);

                            $dados_produto = mysqli_fetch_row($resultado_consulta_produto);
                        ?>

                        <div id="img_produto">
                            <img src="<?php echo "$dados_produto[7]";?>" alt="Produto">
                        </div>
                        <div id="informacao_produto">
                            <h1><?php echo "$dados_produto[3] $dados_produto[4]";?></h1>
                            <div id="div_texto">
                                <p><?php echo "$dados_produto[6]";?></p>
                            </div>
                        </div>
                        <div id="valor_produto">
                            <ul>
                                <li>de:  <span>  <?php echo number_format($dados_produto[5], 2, ',', '.');?>$ </span> </li>
                                <?php  $preco = ($dados_produto[5] - (5/100 * $dados_produto[5]))?>
                                <li>Por: <span><?php echo number_format($preco, 2, ',', '.');?>$ </span> </li>
                                <?php  $cartao = $preco /12?>
                                <li> ou <span> 12x </span> de <span> <?php echo number_format($cartao, 2, ',', '.');?>$</span> sem juros</li>
                                <?php  $preco2 = ($dados_produto[5] - (10/100 * $dados_produto[5]))?>
                                <li> à vista no boleto: <span><?php echo number_format($preco2, 2, ',', '.');?>$</span> </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="acao_produto">
                        <a href="index.php"><button><i class="fas fa-long-arrow-alt-left"></i> Continuar Comprando</button></a>
                        <a href="valida_login.php"><button>Ir para o carrinho <i class="fas fa-shopping-cart"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="rodape">
            <?php include "rodape.php";?>
        </div>
    </body>
</html>


