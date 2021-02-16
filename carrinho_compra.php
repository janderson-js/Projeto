<?php

    $conecta = mysqli_connect ("localhost", "root", "", "php_vitrine");

    $cod = $_SESSION["usuarios_cod_user"];

    $slq_consulta_produto = "SELECT * from produtos
                WHERE usuarios_cod_user = '$cod'
                AND  status_prod = 'F'
            ";
    $resultado_consulta_produto = mysqli_query($conecta,$slq_consulta_produto);

    

    $linhas = mysqli_num_rows($resultado_consulta_produto);

    $valor_prod = 0;$valor_boleto = 0;

    if($linhas){

        while($dados_produto = mysqli_fetch_row($resultado_consulta_produto)){
            ?>
            <div id="produto">
                <div id="img_produto">
                    <a href="exibe.php?cod=<?php echo "$dados_produto[0]";?>"><img src="<?php echo "$dados_produto[7]";?>" alt="Produto"></a>
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
                    <a href="processa_remove.php?cod=<?php echo "$dados_produto[0]";?>"><button>Remover <i class="fas fa-trash-alt"></i></button></a>
                </div>
            </div>
<?php  
            $valor_prod = $valor_prod + $preco;
            $valor_boleto = $valor_boleto + $preco2;
}?> 
            <div id="dados_endereco" class="dados_endereco">
            <?php
                        $sql_meus_dados_user = "SELECT * FROM usuarios
                                                    WHERE cod_user = '$cod'";

                        $sql_meus_dados_login = "SELECT email, senha FROM logins
                        WHERE usuarios_cod_user = '$cod'";

                        $sql_meus_dados_endereco = "SELECT * FROM endereco
                        WHERE usuarios_cod_user = '$cod'";

                        $sql_meus_dados_telefone = "SELECT * FROM  telefone
                                                            WHERE usuarios_cod_user = '$cod'";

                        $resultado_sql_meus_dados_user = mysqli_query($conecta,$sql_meus_dados_user);

                        $resultado_sql_meus_dados_login = mysqli_query($conecta,$sql_meus_dados_login);

                        $resultado_sql_meus_dados_endereco = mysqli_query($conecta,$sql_meus_dados_endereco);

                        $resultado_sql_meus_dados_telefone = mysqli_query($conecta,$sql_meus_dados_telefone);

                        $dados_user = mysqli_fetch_row($resultado_sql_meus_dados_user);

                        $dados_login = mysqli_fetch_row($resultado_sql_meus_dados_login);

                        $dados_telefone = mysqli_fetch_row($resultado_sql_meus_dados_telefone);

                        $dados_endereco = mysqli_fetch_row($resultado_sql_meus_dados_endereco);


                    ?>
                    <h3>Dados</h3>
                    <div id="div_informacoes">
                        <table class="dados_carrinho">
                            <tr>
                                <td>Nome: </td>
                                <td><?php echo " $dados_user[1] $dados_user[2]"; ?></td>
                            </tr>
                            <tr>
                                <td>e-mail: </td>
                                <td><?php echo "$dados_login[0]"; ?></td>
                            </tr>
                        </table>
                        <?php
                            if($dados_user[3] != "administrador"){?>

                                <table class="dados_carrinho">
                                    <tr>
                                        <td>Endereço:</td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td> </td>
                                        <td><?php echo " $dados_endereco[2] - $dados_endereco[3]"; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?php echo " $dados_endereco[4]"; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?php echo " $dados_endereco[5] - $dados_endereco[6]"; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?php echo " $dados_endereco[7]"; ?></td>
                                    </tr>
                                </table>
                        <?php    }
                        ?>
                    </div>
            </div>
            <div id="dados_valor" class="dados_endereco">
                <h3><i class="fas fa-dollar-sign"></i> Valor</h3>
                <div id="div_valores">
                    <div id="aprenseta">
                        <ul>
                            <?php $cartao_prod = $valor_prod/12; ?>
                            <li><p>valor: <span><?php echo number_format($valor_prod, 2, ',', '.')."$";?></span></p></li>
                            <li> <p><span>12x</span> no cartao em ate <span><?php echo number_format($cartao_prod, 2, ',', '.')."$"; ?></span></p></li>
                            <li><p>valor a vista no boleto <span><?php echo number_format($valor_boleto, 2, ',', '.')."$";?></span></p></li>
                        </ul>
                    </div>
                    <div id="apresenta_valor">
                        <p>SubTotal: <?php echo number_format($valor_prod, 2, ',', '.')."$";?></p>
                        <p>A vista :<?php echo number_format($valor_boleto, 2, ',', '.')."$";?></p>           
                    </div>
                </div>
            </div>
            <div id="acao_produto">
                <a href="index.php"><button><i class="fas fa-long-arrow-alt-left"></i> Continuar Comprando</button></a>
                <a href="processa_venda.php"><button>Finalizar Compra <i class="fas fa-shopping-cart"></i></button></a>
            </div>
<?php   }else{
    
        echo "<h1>Esta Vazio </h1>";
        echo "<a href='index.php'><button><i class='fas fa-long-arrow-alt-left'></i> Comprar Agora</button></a>";

    }?>
