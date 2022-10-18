<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro - Amigo Pet</title>
    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="css/cabecalho.css" />
    <link rel="stylesheet" type="text/css" href="css/rodape.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo_texto.css" />
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>

<body>

    <!--INICIO CABEÇALHO-->
    <div class="retangulo">

        <img class="logo" alt="AMIGO PET" width="150px" src="img/logo.png" />

        <nav>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="parceiro.html">Parceiro</a></li>
                <li><a href="login.html">Cadastrar | Login</a></li>
            </ul>
        </nav>
    </div>
    <!--FIM CABEÇALHO-->

    <!--FORMULÁRIO DE CADASTRO-->

    <div class="container_cadastro">

        <h3>Cadastro do Usuário</h3><br>

        <form method="post" action="">

            <label><input type="radio" name="protetor" value="protetor" />Sou Doador e/ou Protetor</label>
            <label></label><input type="radio" name="parceiro" value="parceiro" />Sou Parceiro</label><br><br>

            <label>
                <p>Nome</p> <br><input type="text" name="nome_inf" id="id_nome" placeholder="Insira seu Nome"
                    size="60"><br><br>

                <label>
                    <p>E-mail</p> <br><input type="text" name="nome_inf" id="id_email" placeholder="Insira sua Cidade"
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
                    <a href="amigopet.html"></a><input class="button" type="submit" value="Cadastrar" />
                </p><br><br>

                </p>
        </form>
    </div>

    <!-- FIM FORMULÁRIO DE CADASTRO -->

    <!--INICIO RODAPE-->
    <footer>
        <footer id="rodape">
            <img class="logo2" alt="AMIGO PET" width="150x" src="img/logo.png" />

            <div class="sitemap">
                <li><a href="home.html">Home</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="parceiro.html">Parceiro</a></li>
                <li><a href="login.html">Cadastrar | Login</a></li>
            </div>

            <div class="direitos_autorais">
                Instituto Amigo Pet © 2022 Todos os direitos reservados.
                Consulte nossa Política de Privacidade.
            </div>
        </footer>
        <!--FIM RODAPE-->


</body>

</html>