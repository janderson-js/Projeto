<?php 
    $conectar = mysqli_connect("localhost","root","","php_vitrine");

    $sql_consulta_estoque = "SELECT * FROM produtos 
                                WHERE status_prod = 'N'";

    $result_consulta_estoque = mysqli_query($conectar,$sql_consulta_estoque);

    $valor_estoque = 0;
    while($dados_estoque = mysqli_fetch_row($result_consulta_estoque)){?>

                    <div id="div_prod">
                        <div id="img_estoque">
                            <a href="exibe.php?cod=<?php echo "$dados_estoque[0]";?>"><img src="<?php echo "$dados_estoque[7]";?>" alt="Produto"></a>                           
                        </div>
                        <div id="descricao_estoque">
                            <a href="exibe.php?cod=<?php echo "$dados_estoque[0]";?>"><h1><?php echo "$dados_estoque[3] $dados_estoque[4]";?></h1></a>
                        </div>
                        <div id="preco_estoque">
                            <p><span>Preço:</span> <?php echo number_format($dados_estoque[5], 2, ',', '.')."$";?></p>
                        </div>
                        <div id="alterar_estoque">
                            <a href="altera_prod.php?cod_prod=<?php echo "$dados_estoque[0]";?>"><button>Alterar</button></a>
                        </div>
                    </div>
<?php
                $valor_estoque = $valor_estoque + $dados_estoque[5];
    }
?>