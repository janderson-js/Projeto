<?php
   

   $conectar = mysqli_connect("localhost","root","","php_vitrine");

    @$pesquisa = $_GET["pesquisa"];
    if($pesquisa == true){?>
        
        <div id="funcionalidade">
        <?php       
                        $slq_consulta = "SELECT cod_prod, marca, modelo, preco, descricao, foto, status_prod from produtos
                                                WHERE marca LIKE '%$pesquisa%'
                                                AND status_prod = 'N'";
        
                        $reult = mysqli_query($conectar,$slq_consulta);
        
                        while($dados = mysqli_fetch_row($reult)){
        ?>     
                            <div id="conteiner">
                                <div id="conteudo_especifico">
                                    <div id="central">
                                        <div id="imagem1">
                                        <a href="exibe.php?cod=<?php echo "$dados[0]";?>"><img  src="<?php echo "$dados[5]"; ?>" alt="Produto"></a>
                                        </div>
                                    </div>
                                    <div id="detalhes">
                                        <ul>
                                            <li><a href="exibe.php?cod=<?php echo "$dados[0]";?>"><?php echo "$dados[1]"." $dados[2]";?></a></li>
                                            <li>de:  <span>  <?php echo number_format($dados[3], 2, ',', '.');?>$ </span> </li>
                                            <?php  $preco = ($dados[3] - (5/100 * $dados[3]))?>
                                            <li>Por: <span><?php echo number_format($preco, 2, ',', '.');?>$ </span> </li>
                                            <?php  $cartao = $preco /12?>
                                            <li> ou <span> 12x </span> de <span> <?php echo number_format($cartao, 2, ',', '.');?>$</span> sem juros</li>
                                            <?php  $preco2 = ($dados[3] - (10/100 * $dados[3]))?>
                                            <li> à vista no boleto: <span><?php echo number_format($preco2, 2, ',', '.');?>$</span> </li>
                                        </ul>
                                        <div id="acao">
                                            <div class="botao_detalhes">
                                                    <a href="exibe.php?cod=<?php echo "$dados[0]";?>"><button><i class="fas fa-plus"></i>detalhes</button></a>
                                            </div>
                                            <div id="botao_comprar">
                                                    <a href="#"><button><i class="fas fa-shopping-cart"></i>comprar</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            <?php      }?>
         </div>
    <?php }else{
        @$marca = $_GET["marca"];
        if($marca == false){?>

            <div id="funcionalidade">
<?php       
                $slq_consulta = "SELECT cod_prod, marca, modelo, preco, descricao, foto, status_prod from produtos
                                        WHERE status_prod = 'N'    ";

                $reult = mysqli_query($conectar,$slq_consulta);

                while($dados = mysqli_fetch_row($reult)){
?>     
                    <div id="conteiner">
                        <div id="conteudo_especifico">
                            <div id="central">
                                <div id="imagem1">
                                    <a href="exibe.php?cod=<?php echo "$dados[0]";?>"><img  src="<?php echo "$dados[5]"; ?>" alt="Produto"></a>
                                </div>
                            </div>
                            <div id="detalhes">
                                <ul>
                                    <li><a href="exibe.php?cod=<?php echo "$dados[0]";?>"><?php echo "$dados[1]"." $dados[2]";?></a></li>
                                    <li>de:  <span>  <?php echo number_format($dados[3], 2, ',', '.');?>$ </span> </li>
                                    <?php  $preco = ($dados[3] - (5/100 * $dados[3]))?>
                                    <li>Por: <span><?php echo number_format($preco, 2, ',', '.');?>$ </span> </li>
                                    <?php  $cartao = $preco /12?>
                                    <li> ou <span> 12x </span> de <span> <?php echo number_format($cartao, 2, ',', '.');?>$</span> sem juros</li>
                                    <?php  $preco2 = ($dados[3] - (10/100 * $dados[3]))?>
                                    <li> à vista no boleto: <span><?php echo number_format($preco2, 2, ',', '.');?>$</span> </li>
                                </ul>
                               <div id="acao">
                                   <div class="botao_detalhes">
                                        <a href="exibe.php?cod=<?php echo "$dados[0]";?>"><button><i class="fas fa-plus"></i>detalhes</button></a>
                                   </div>
                                   <div id="botao_comprar">
                                        <a href="#"><button><i class="fas fa-shopping-cart"></i>comprar</button></a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
 <?php          }?>
            </div>
<?php  }elseif($marca == true){?>
            <d id="funcionalidade"> 
<?php 
                $slq_consulta = "SELECT cod_prod, marca, modelo, preco, descricao, foto, status_prod from produtos
                                        WHERE marca = '$marca' 
                                        AND status_prod = 'N'";

                $reult = mysqli_query($conectar,$slq_consulta);

                while($dados = mysqli_fetch_row($reult)){
?>     
                    <div id="conteiner">
                        <div id="conteudo_especifico">
                            <div id="central">
                                <div id="imagem1">
                                <a href="exibe.php?cod=<?php echo "$dados[0]";?>"><img  src="<?php echo "$dados[5]"; ?>" alt="Produto"></a>
                                </div>
                            </div>
                            <div id="detalhes">
                                <ul>
                                    <li><a href="exibe.php?cod=<?php echo "$dados[0]";?>"><?php echo "$dados[1]"." $dados[2]";?></a></li>
                                    <li>de:  <span>  <?php echo number_format($dados[3], 2, ',', '.');?>$ </span> </li>
                                    <?php  $preco = ($dados[3] - (5/100 * $dados[3]))?>
                                    <li>Por: <span><?php echo number_format($preco, 2, ',', '.');?>$ </span> </li>
                                    <?php  $cartao = $preco /12?>
                                    <li> ou <span> 12x </span> de <span> <?php echo number_format($cartao, 2, ',', '.');?>$</span> sem juros</li>
                                    <?php  $preco2 = ($dados[3] - (10/100 * $dados[3]))?>
                                    <li> à vista no boleto: <span><?php echo number_format($preco2, 2, ',', '.');?>$</span> </li>
                                </ul>
                                <div id="acao">
                                   <div class="botao_detalhes">
                                        <a href="exibe.php?cod=<?php echo "$dados[0]";?>"><button><i class="fas fa-plus"></i>detalhes</button></a>
                                   </div>
                                   <div id="botao_comprar">
                                        <a href="#"><button><i class="fas fa-shopping-cart"></i>comprar</button></a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
<?php           }?>
            </d>
<?php       
        }
    }?>