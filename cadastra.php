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
                    <div id="funcionalidade2">
                        <div id="cadastro">
                        <a href="index.php"><button>Voltar</button></a>
                            <form action="processa_cadastra.php" method="post">
                                <table id="tabela">
                                    <tr>
                                        <td>Marca:</td>
                                        <td><input type="text" name="marca" placeholder="Marca"></td>
                                    </tr>
                                    <tr>
                                        <td>Modelo:</td>
                                        <td><input type="text" name="modelo" placeholder="Modelo"></td>
                                    </tr>
                                    <tr>
                                        <td>Preço:</td>
                                        <td><input type="text" name="preco" placeholder="Preço"></td>
                                    </tr>
                                    <tr>
                                        <td>Descrição:</td>
                                        <td><textarea type="text" name="descricao" placeholder="Descricao"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Foto:</td>
                                        <td> <input type="file" name="foto"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><input type="reset"  value="Limpar campos" /> <input type="submit" value="Cadastrar"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="rodape">
                    sadasd
                </div>
            </div>
        </div>
    </body>
</html>