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
                            for($a=1; $a <= 5; $a++){
                            ?>
                                    <li><a href="index.php?cod = <?php echo $a;?>"><?php echo "Marca-($a)"; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div id="funcionalidade">
                        <div id="conteiner">
                            <?php for($i=1; $i <= 21; $i++){?>
                                <div id="conteudo_especifico">
                                    <div id="central">
                                        <div id="imagem1">
                                            <a href="index.php?cod = <?php $i ?>"> <img  width="85%" height="85%" src="img/teste.jpg" alt="Produto"> </a>
                                        </div>
                                    </div>
                                    <div id="detalhes">
                                        <ul>
                                            <li>Titulo</li>
                                            <li>de:  <span>  500$ </span> </li>
                                            <li>Por: <span>  450$ </span> </li>
                                            <li> ou <span> 12x </span> de <span> 41,66$</span></li>
                                            <li> à vista no boleto: <span>400$</span> </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <a href="cadastra.php"><button id="btn_cadastrar">Cadastrar</button> </a>
                </div>
                <div id="rodape">
                    sadasd
                </div>
            </div>
        </div>
    </body>
</html>