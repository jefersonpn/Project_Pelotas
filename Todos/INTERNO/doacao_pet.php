<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações - Amigo Pet</title>
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

    <!-- INICIO CADASTRO PET -->

    <body>

        <div class="posicao_padrao">

            <h3>Cadastro do Pet</h3><br><br>

            <form method="post" action="">

                <label>
                    <p>Nome do Pet</p><br><input type="text" name="nome_inf" id="id_nome"
                        placeholder="Insira o nome do Pet" size="60"><br><br>

                    <label>
                        <p>Raça</p><br><input type="text" name="nome_inf" id="id_email"
                            placeholder="Insira a raça do Pet" size="60">
                    </label><br><br>

                    <label>
                        <p>Nascimento</p><br><input type="date" name="nascpet_inf" id="id_nascpet">
                    </label><br><br>

                    <label>
                        <p>Cor</p><br><input type="text" name="cor_pet" id="cor_pet" placeholder="Cor do Pet">
                    </label><br><br>

                    <label>
                        <p>Sexo do Pet</p><br>
                        <label><input type="radio" name="sexo_pet" value="pet" />Fêmea</label>
                        <label><input type="radio" name="sexo_pet" value="pet" />Macho</label>
                    </label><br><br>


                    <form name="foto_pet" type="text" method="post" enctype="multipart/form-data" action="upload.php">
                        <label>
                            <p>Foto</p> <br><input type="file" name="image" />
                        </label>
                        <!-- <input type="submit" id="button_upload" value="Enviar"
                                name="envia" /> -->
                    </form><br><br><br>

                    <p>
                        <a href="amigopet.html"></a><input id="button_doar" type="submit" value="Cadastrar Pet" />
                    </p><br><br><!-- não pega o html do amigopet, não entendi -->

                    </p>
            </form>
        </div>

        <!--FIM CADASTRO PET -->

        <!-- FIM CADASTRO PET -->

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