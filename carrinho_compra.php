<?php

    $conecta = mysqli_connect ("localhost", "root", "", "php_vitrine");

    $cod = $_SESSION["usuarios_cod_user"];

    $slq_consulta_produto = "SELECT * from produtos
                WHERE usuarios_cod_user = '$cod'
                AND  status_prod = 'F'
            ";
    $resultado_consulta_produto = mysqli_query($conecta,$slq_consulta_produto);

    $linhas = mysqli_num_rows($resultado_consulta_produto);

    if($linhas){
        while($dados_produto = mysqli_fetch_row($resultado_consulta_produto)){?>
        
            <div id="produto">
                <div id="img_produto">
                    <img src="<?php echo "$dados_produto[7]";?>" alt="Produto">
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
<?php   }?>
            <div id="acao_produto">
                <a href="index.php"><button><i class="fas fa-long-arrow-alt-left"></i> Continuar Comprando</button></a>
                <a href="carrinho_compra.php"><button>Finalizar Compra <i class="fas fa-shopping-cart"></i></button></a>
            </div>
<?php   }else{
    
        echo "<h1>Esta Vazio </h1>";
        echo "<a href='index.php'><button><i class='fas fa-long-arrow-alt-left'></i> Comprar Agora</button></a>";

    }?>
