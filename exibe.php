<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/fotmata.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>
    <body>
        <div id="top">
            <a href="index.php">
                <div id="logo">
                    <img src="img/PHP vitrine Logotipo.png" alt="logo" id="logo_top" >
                </div>
            </a>
            <div id="pesquisar">
                <div id="faz_pesquisa">
                    <form action="index.php">
                        <label for="" id="lbl_form_pesquisar">
                            <input type="text" autocomplete="off" name="pesquisa" placeholder="Pesquisar" >
                            <button type="submit"><i class="fas fa-search"></i></i></button>
                        </label>
                    </form>
                </div>
            </div>
            <div id="interacao">
                <div id="login">
                    <label for=""> <i class="far fa-user-circle"></i></label>
                </div>
            </div>
        </div>
        <div id="conteudo">
            <div id="funcionalidade2">
                <div id="exibe">
                    <?php
                        $conectar = mysqli_connect("localhost","root","","vitrine_php");
                        $cod = $_GET["cod"];
                        $slq_consulta = "SELECT * from produtos
                                WHERE cod_prod = '$cod'";

                        $reult = mysqli_query($conectar,$slq_consulta);

                        $dados_exibe = mysqli_fetch_row($reult);
                    ?>
                    <div id="imagem">
                        <img src="<?php echo "$dados_exibe[5]"; ?>" alt="Produto">
                    </div>
                    <a href="index.php"><button id="exibe_btn_volta"><span>Voltar</span></button></a>
                    <div id="informes">
                        <div id="texto">
                            <ul>
                                <li><?php echo "$dados_exibe[1]"." $dados_exibe[2]";?></li>
                                <li>de:  <span>  <?php echo number_format($dados_exibe[3], 2, ',', '.');?>$ </span> </li>
                                <?php  $preco = ($dados_exibe[3] - (5/100 * $dados_exibe[3]))?>
                                <li>Por: <span><?php echo number_format($preco, 2, ',', '.');?>$ </span> </li>
                                <?php  $cartao = $preco /12?>
                                <li> ou <span> 12x </span> de <span> <?php echo number_format($cartao, 2, ',', '.');?>$</span> sem juros</li>
                                <?php  $preco2 = ($dados_exibe[3] - (10/100 * $dados_exibe[3]))?>
                                <li> à vista no boleto: <span><?php echo number_format($preco2, 2, ',', '.');?>$</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div id="descricao">
                        <div id="texto_descricao" style='text-align:center'>
                            <h3>Descrição</h3>
                            <p><?php echo "$dados_exibe[4]";?></p>
                        </div>
                    </div>
                </div>
            </div>
        <div id="rodape">
            sadasd
        </div>
    </body>
</html>