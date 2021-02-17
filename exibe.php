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
                <div id="exibe">
                    <?php
                        $conectar = mysqli_connect("localhost","root","","php_vitrine");
                        $cod = $_GET["cod"];
                        $slq_consulta = "SELECT * from produtos
                                WHERE cod_prod = '$cod'";

                        $reult = mysqli_query($conectar,$slq_consulta);

                        $dados_exibe = mysqli_fetch_row($reult);
                    ?>
                    <div id="imagem">
                        <img src="<?php echo "$dados_exibe[7]"; ?>" alt="Produto">
                    </div>
                    <div id="informes">
                        <div id="texto">
                            <ul>
                                <li><?php echo "$dados_exibe[3]"." $dados_exibe[4]";?></li>
                                <li>de:  <span>  <?php echo number_format($dados_exibe[5], 2, ',', '.');?>$ </span> </li>
                                <?php  $preco = ($dados_exibe[5] - (5/100 * $dados_exibe[5]))?>
                                <li>Por: <span><?php echo number_format($preco, 2, ',', '.');?>$ </span> </li>
                                <?php  $cartao = $preco /12?>
                                <li> ou <span> 12x </span> de <span> <?php echo number_format($cartao, 2, ',', '.');?>$</span> sem juros</li>
                                <?php  $preco2 = ($dados_exibe[5] - (10/100 * $dados_exibe[5]))?>
                                <li> à vista no boleto: <span><?php echo number_format($preco2, 2, ',', '.');?>$</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div id="descricao">
                        <div id="texto_descricao" style='text-align:center'>
                            <h3>Descrição</h3>
                            <p><?php echo "$dados_exibe[6]";?></p>
                            <div id="div_botao_descricao">
                                <a href="index.php"><button><i class="fas fa-long-arrow-alt-left"></i> Voltar ao inicio</i></button></a>
                                <a href="processa_adc_carrinho_compra.php?cod=<?php echo "$dados_exibe[0]";?>"><button>Comprar <i class="fas fa-shopping-cart"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div id="rodape">
            <?php include "rodape.php";?>
        </div>
    </body>
</html>