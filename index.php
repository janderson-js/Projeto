<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/fotmata.css">
</head>
<body>
    <div id="pagina">
        <div id="top">
            <div id="logo">
                Logo
            </div>
        </div>
        <div id="conteudo">
            <div id="div_lateral_esquerda">
                Esquerda
            </div>
            <div id="conteiner">
               <?php for($i=1; $i < 13; $i++){?>
                    <div id="conteudo_especifico">
                        <div id="central">
                           <div id="imagem1">
                               <a href="#"> <img  width="85%" height="85%" src="img/teste.jpg" alt="Produto"> </a>
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
            <div id="div_lateral_direita">
                Direita
            </div>
        </div>
        
    </div>
</body>
</html>