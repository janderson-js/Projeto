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
        <div id="pagina">
        <div id="teste">
                <div id="top">
                    <div id="logo">
                        Logo
                    </div>
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
                        <label for=""> <i class="far fa-user-circle"></i> </label>
                    </div>
                </div>
                <div id="conteudo">
                    <div id="div_lateral_esquerda">
                        <h1>Modelos</h1>
                        <ul>
                            <li><a href="index.php?marca=<?php echo false;?>"> Mostrar Todos</a></li>
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
                    
                    <?php include "mostra.php";?>
  
                    <a href="cadastra.php"><button id="btn_cadastrar"><span>Cadastrar</span></button> </a>
                </div>
                <div id="rodape">
                    sadasd
                </div>
            </div>
        </div>
    </body>
</html>