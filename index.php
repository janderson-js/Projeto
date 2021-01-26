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
                        <div id="imagem" align="center">
                           <a href="#"> <img width="100%" height="100%" src="img/teste.jpg" alt=""> </a>
                        </div>
                        <div id="detalhes">
                           <ul>
                                <li>Titulo</li>
                                <li> eu </li>
                                <li> nada </li>
                                <li> teste</li>
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