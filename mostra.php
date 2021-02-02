<?php
   session_start();

   $conectar = mysqli_connect("localhost","root","","vitrine_php");

    @$marca = $_GET["marca"];
    if($marca == false){?>

        <div id="funcionalidade">
<?php       
            $slq_consulta = "SELECT cod_prod, marca, modelo, preco, descricao, foto from produtos
                                        ";

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
                        </div>
                    </div>
                </div>
 <?php      }?>
        </div>
<?php  }elseif($marca == true){?>
        <div id="funcionalidade"> 
            <div id="navegacao">
                <p><a href="index.php">Home </a> > <a href="index.php?marca=<?php echo "$marca";?>"><?php echo "$marca";?></a></p>
            </div>
<?php 
            $slq_consulta = "SELECT cod_prod, marca, modelo, preco, descricao, foto from produtos
                                    WHERE marca = '$marca' ";

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
                        </div>
                    </div>
                </div>
<?php       }?>
        </div>
<?php       
    }?>