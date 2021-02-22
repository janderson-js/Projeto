<?php
    $cod_venda_user = $_GET["cod_user"];
    $cod_venda_prod = $_GET["cod_prod"];

    $sql_consulta_venda = "SELECT * FROM produtos
                            WHERE usuarios_cod_user = '$cod_venda_user'
                            and status_prod = 'V'";
    $sql_consulta_user = "SELECT * FROM usuarios
                            WHERE cod_user = '$cod_venda_user'";
    $sql_consulta_endereco = "SELECT * FROM endereco
                                    WHERE usuarios_cod_user = '$cod_venda_user'";
    $slq_consulta_telefone = "SELECT * FROM telefone
                                WHERE usuarios_cod_user = '$cod_venda_user'";
    $sql_consulta_login = "SELECT * FROM logins
                                WHERE usuarios_cod_user = '$cod_venda_user'";

    $result_consulta_venda = mysqli_query($conecta,$sql_consulta_venda);

    $result_consulta_user = mysqli_query($conecta,$sql_consulta_user);

    $result_consulta_endereco = mysqli_query($conecta,$sql_consulta_endereco);

    $result_consulta_telefone = mysqli_query($conecta,$slq_consulta_telefone);

    $result_consulta_login = mysqli_query($conecta,$sql_consulta_login);

    $cnt = 0;

            $dados_venda_user = mysqli_fetch_row($result_consulta_user);

            $dados_venda_endereco = mysqli_fetch_row($result_consulta_endereco);

            $dados_venda_telefone = mysqli_fetch_row($result_consulta_telefone);

            $dados_venda_logins = mysqli_fetch_row($result_consulta_login);

            $cnt = $cnt + 1;
        
            while($dados_vendas = mysqli_fetch_row($result_consulta_venda)){?>
            
            <div id="exibe_venda">
                <div id="dados_produto">
                    <div id="imagen">
                        <img src="<?php echo "$dados_vendas[7]";?>" alt="produto">
                    </div>
                    <div id="descricao_prod">
                        <p><?php echo "$dados_vendas[3] $dados_vendas[4] ";?></p>
                    </div>
                    <div id="preco_prod">
                        <p><?php echo number_format($dados_vendas[5], 2, ',', '.')."$";?></p>
                    </div>
                </div>
            </div>
<?php        }?>        
            <div id="dados_user">
            <table class="dados_carrinho">
                            <tr>
                                <td>Nome: </td>
                                <td><?php echo " $dados_venda_user[1] $dados_venda_user[2]"; ?></td>
                            </tr>
                            <tr>
                                <td>e-mail: </td>
                                <td><?php echo "$dados_venda_logins[2]"; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    telefone Contado:
                                </td>
                                <td>
                                    <?php echo "$dados_venda_telefone[3]";?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    telefone:
                                </td>
                                <td>
                                    <?php echo "$dados_venda_telefone[2]";?>
                                </td>
                            </tr>
                        </table>
                        <?php
                            if($dados_venda_user[3] != "administrador"){?>

                                <table class="dados_carrinho">
                                    <tr>
                                        <td>Endereço:</td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td> </td>
                                        <td><?php echo " $dados_venda_endereco[2] - $dados_venda_endereco[3]"; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?php echo " $dados_venda_endereco[4]"; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?php echo " $dados_venda_endereco[5] - $dados_venda_endereco[6]"; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?php echo " $dados_venda_endereco[7]"; ?></td>
                                    </tr>
                                </table>
                        <?php    }
                        ?>
            </div>
            <a href="enviado.php"><button>enviar <i class="fas fa-truck-moving"></i></button></a>
        </div>
<?php 
    
?>