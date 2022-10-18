<?php 
include_once("conectar.php");
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Doações - Amigo Pet</title>

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
                <li><a href="amigopet.html">Principal</a></li>
                <li><a href="editarCadastro.html">Perfil</a></li>
                <li><a href="doacao_escolhe.html">Doação</a></li>
                <li><a href="doacao_solicitar.html">Solicitação</a></li>
                <li><a href="index.html">Sair</a></li>
            </ul>
        </nav>
    </div>
    <!--FIM CABEÇALHO-->

    <!-- EDITAR CADASTRO -->

    <div class="posicao_padrao">

        <h3>Editar Cadastro</h3><br>

        <form method="post" action="">

            <label>
                <p>Nome</p> <br><input type="text" name="nome_inf" id="id_nome" placeholder="Insira seu Nome"
                    size="60"><br><br>

                <label>
                    <p>E-mail</p> <br><input type="text" name="nome_inf" id="id_email" placeholder="Insira seu E-mail"
                        size="60">
                </label><br><br>

                <label>
                    <p>Nascimento</p> <br><input type="date" name="nasc_inf" id="id_nasc">
                </label><br><br>

                <label>
                    <p>Telefone</p> <br><input type="text" name="telefone_inf" id="id_telefone"
                        placeholder="+55 (xx) xxxxx-xxxx">
                </label><br><br>

                <label>
                    <p>Cidade</p> <br><input type="text" name="nome_inf" id="id_cidade" placeholder="Insira sua Cidade"
                        size="60">
                </label><br><br>

                <label>
                    <p>Endereço</p> <br><input type="text" name="nome_inf" id="id_cidade"
                        placeholder="Insira seu endereço" size="60">
                </label><br><br>

                <label>
                    <p>Número</p> <br><input type="text" name="cep" id="cep" placeholder="Número da residência">
                </label><br><br>

                <label>
                    <p>CEP</p> <br><input type="text" name="cep" id="cep" placeholder="Insira seu CEP">
                </label><br><br>

                <form name="foto_usuario" type="text" method="post" enctype="multipart/form-data" action="upload.php">
                    <label>
                        <p>Foto</p> <br><input type="file" name="image" />
                        <!-- <input type="submit" id="button_upload" value="Enviar"
                                name="envia" /> -->
                </form><br><br><br>

                <p>
                    <a href="#"></a><input id="button_doar" type="submit" value="Salvar Alteração" />
                </p><br><br>

                </p>
        </form>
    </div>
    <!-- FIM EDITAR CADASTRO -->

    <!--INICIO RODAPE-->
    <footer>
        <footer id="rodape">
            <img class="logo2" alt="AMIGO PET" width="150x" src="img/logo.png" />

            <div class="sitemap">
                <li><a href="amigopet.html">Principal</a></li>
                <li><a href="editarCadastro.html">Perfil</a></li>
                <li><a href="doacao_escolhe.html">Doação</a></li>
                <li><a href="doacao_solicitar.html">Solicitação</a></li>
                <li><a href="index.html">Sair</a></li>
            </div>

            <div class="direitos_autorais">
                Instituto Amigo Pet © 2022 Todos os direitos reservados.
                Consulte nossa Política de Privacidade.
            </div>
        </footer>
        <!--FIM RODAPE-->

</body>

</html>