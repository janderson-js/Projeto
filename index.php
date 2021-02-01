<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/fotmata.css">
    </head>
    <body>
        <div id="pagina">
        <div id="teste">
                <div id="top">
                    <div id="logo">
                        Logo
                    </div>
                </div>
                <div id="conteudo">
                    <div id="div_lateral_esquerda">
                        <h1>Modelos</h1>
                        <ul>
                            <?php
                            
                            $conectar = mysqli_connect("localhost","root","","vitrine_php");

                            $sql_qtd = "SELECT  COUNT( marca)
                                                      FROM produtos
                                                      GROUP BY marca
                                                      HAVING (COUNT(*) > 0)
                                                      ";

                            $sql_consulta_marca = "SELECT marca, COUNT(marca)
                                        FROM produtos
                                        GROUP BY marca
                                        HAVING (COUNT(*) > 0)
                                        ";

                            $result_qtd = mysqli_query ($conectar, $sql_qtd);

                            $resultado_marca = mysqli_query ($conectar, $sql_consulta_marca);

                            while($consulta = mysqli_fetch_row($result_qtd)){
                                $consulta_marca = mysqli_fetch_row($resultado_marca);
                            ?>
                                <li><a href="index.php?marca=<?php echo "$consulta_marca[0]";?>"><?php echo "$consulta_marca[0]"."-($consulta[0])"; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div id="funcionalidade">
                        <div id="conteiner">
                            <?php

                                $slq_consulta = "SELECT * from produtos";

                                $reult = mysqli_query($conectar,$slq_consulta);

                                while($dados = mysqli_fetch_row($reult)){?>
                                
                                <div id="conteudo_especifico">
                                    <div id="central">
                                        <div id="imagem1">
                                        <a href="exibe.php?cod=<?php echo "$dados[0]";?>"><img  width="85%" height="85%" src="<?php echo "$dados[5]"; ?>" alt="Produto"></a>
                                        </div>
                                    </div>
                                    <div id="detalhes">
                                        <ul>
                                            <li><?php echo "$dados[1]"." $dados[2]";?></li>
                                            <li>de:  <span>  <?php echo number_format($dados[3], 2, ',', '.');?>$ </span> </li>
                                            <?php  $preco = ($dados[3] - (5/100 * $dados[3]))?>
                                            <li>Por: <span><?php echo number_format($preco, 2, ',', '.');?>$ </span> </li>
                                            <?php  $cartao = $preco /12?>
                                            <li> ou <span> 12x </span> de <span> <?php echo number_format($cartao, 2, ',', '.');?>$</span> sem juros</li>
                                            <?php  $preco2 = ($dados[3] - (10/100 * $dados[3]))?>
                                            <li> à vista no boleto: <span><?php echo number_format($preco2, 2, ',', '.');?>$</span> </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <a href="cadastra.php"><button id="btn_cadastrar"><span>Cadastrar</span></button> </a>
                </div>
                <div id="rodape">
                    sadasd
                </div>
            </div>
        </div>
    </body>
</html>