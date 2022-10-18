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
                <li><a href="amigopet.html">Principal</a></li>
                <li><a href="editarCadastro.html">Perfil</a></li>
                <li><a href="doacao_escolhe.html">Doação</a></li>
                <li><a href="doacao_solicitar.html">Solicitação</a></li>
                <li><a href="index.html">Sair</a></li>
            </ul>
        </nav>
    </div>
    <!--FIM CABEÇALHO-->

    <body>

        <div class="posicao_padrao">

            <h3>SOLICITE UMA DOAÇÃO</h3><br><br><br>

            <form name="foto_pet" type="text" method="post" enctype="multipart/form-data" action="upload.php">
                <label>Foto <input type="file" name="image" />
                    <!-- <input type="submit" id="button_upload" value="Enviar"
                            name="envia" /> -->
            </form><br><br><br>

            <form method="post" action="">

                <label>
                    <p>Nome</p> <br><input type="text" name="nome_inf" id="id_nome" placeholder="Nome do Objeto"
                        size="60"><br><br>

                    <label>
                        <p>Quantidade</p> <br><input type="text" name="nome_inf" id="id_email"
                            placeholder="Insira a quantidade" size="60">
                    </label><br><br>

                    <label>
                        <p>Vencimento</p> <br><input type="date" name="nascpet_inf" id="id_nascpet">
                    </label><br><br>

                    <br><label>
                        <p>Categoria</p><br>
                        <select id="idlinguagem" name="txtlinguagem">
                            <option value="categoria1">Casa de Cachorro</option>
                            <option value="categoria2">Roupa</option>
                        </select>
                    </label><br>

                    <br><label>
                        <p>Parceiros</p><br>
                        <select id="idlinguagem" name="txtlinguagem">
                            <option value="parceiro1">Waltzer</option>
                            <option value="parceiro2">Salaberry</option>
                        </select>
                    </label><br><br><br>

                    <p>
                        <br><br><button type="submit" id="button" name="Post" value="1">Doar</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="amigopet.html"><input id="button" type="button" value="Voltar"></a>

                    </p>
            </form>
        </div>
        </div>

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