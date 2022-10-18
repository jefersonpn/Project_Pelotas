<?php

include("conectar.php");

    $msg = false;

    if(isset($_FILES['imagem'])){

        $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); // extensão
        $novo_nome = md5(time()) . $extensao; // nome arquivo
        $diretorio = "upload/"; // diretorio

        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

        $sql_code = "INSERT INTO doacao_solicitacao (id_solicitacao, descricao, motivo, quantidade, categoria, ativo, fk_parceiro, fk_doador, fk_protetor, fk_categoria, data_cadastro, imagem) VALUES (null, '$novo_nome', NOW())";

        if($mysqli->query($sql_code))
            $msg = "Arquivo enviado com Sucesso!";
        else
            $msg = "Falha ao enviar aquivo.";    
    }

?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Doações - Amigo Pet</title>
    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao_cabecalho.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao_rodape.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao_formulario.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao.css" />
</head>

<body>

    <!--INICIO CABEÇALHO-->
    <div class="retangulo">

        <img class="logo" alt="AMIGO PET" width="150px" src="img/logo.png" />

        <nav>
            <ul class="menu">
                <li><a href="amigopet.php">Principal</a></li>
                <li><a href="editarCadastro.php">Perfil</a></li>
                <li><a href="doacao_escolhe.php">Doação</a></li>
                <li><a href="doacao_solicitar.php">Solicitação</a></li>
                <li><a href="index.php">Sair</a></li>
            </ul>
        </nav>
    </div>
    <!--FIM CABEÇALHO-->

    <body>

        <div class="posicao_padrao">

            <h3>SOLICITE UMA DOAÇÃO</h3><br><br><br>



            <form method="Post" action="doacao_doar.php">

                <label>
                    <p>Nome</p> <br><input type="text" name="descricao" id="id_nome" placeholder="Nome do Objeto"
                        size="60"><br><br>
                </label>

                <label>
                    <textarea name="motivo" rows="5" cols="72"></textarea>
                </label><br><br>

                <label>
                    <p>Quantidade</p> <br><input type="text" name="quantidade" placeholder=" Insira a quantidade"
                        size="60">
                </label><br><br>

                <br><label>
                    <p>Categoria</p><br>
                    <select name="categoria" required>
                        <?php 
                            $categoria = "SELECT * FROM categoria";
                            $resultado = mysqli_query($mysqli, $categoria);
                            
                            while($id_categoria=mysqli_fetch_array($resultado)){
                                $id=$id_categoria['id'];
                                $nome=$id_categoria['categoria'];
                                echo "<option value='$id'>$nome</option>";
                            }
                        ?>
                    </select>
                </label><br><br>

                <br><label>
                    <p>Parceiros</p>
                    <select name="parceiro" required>
                        <?php 
                            $categoria = "SELECT * FROM protetor WHERE nomefantasia LIKE '%%' ";
                            $result = mysqli_query($mysqli, $nomefantasia);
                            
                            while($id_parceiro=mysqli_fetch_array($result)){
                                $id=$id_parceiro['id_parceiro'];
                                $nome=$nomefantasia['nomefantasia'];
                                echo "<option value='$id'>$nome</option>";
                            }
                            
                        ?>
                </label>

            </form>
        </div>
        <!--
        <p><br><br>
            <input id="button" name="Post" type="button" value="Voltar"></a>
        </p> -->

        </div>

        <!--INICIO RODAPE-->
        <footer>
            <footer id="rodape">
                <img class="logo2" alt="AMIGO PET" width="150x" src="img/logo.png" />

                <div class="sitemap">
                    <li><a href="amigopet.php">Principal</a></li>
                    <li><a href="editarCadastro.php">Perfil</a></li>
                    <li><a href="doacao_escolhe.php">Doação</a></li>
                    <li><a href="doacao_solicitar.php">Solicitação</a></li>
                    <li><a href="index.php">Sair</a></li>
                </div>

                <div class="direitos_autorais">
                    Instituto Amigo Pet © 2022 Todos os direitos reservados.
                    Consulte nossa Política de Privacidade.
                </div>
            </footer>
            <!--FIM RODAPE-->

    </body>

</html>

<?php

 if(isset($_POST['Post'])){

     $nome = $_POST['nome'];
     $quantidade = $_POST['quantidade'];
     $categoria = $_POST['categoria'];
     $parceiro = $_POST['parceiro']; 
     
     $doacao_voluntaria = "INSERT INTO doacao_voluntaria (id_doacao, descricao, motivo, ativo, quantidade, categoria, data_cadastro, fk_parceiro_id, fk_protetor_id, fk_doador_id, fk_categoria_id) 
     VALUES ($nome, $quantidade, $categoria, $parceiro)";
          mysqli_query($mysqli,$doacao_voluntaria);
          mysqli_close($mysqli);
          header('Location: doacao_minhasdoacoes.php'); 
     
     
 }
?>