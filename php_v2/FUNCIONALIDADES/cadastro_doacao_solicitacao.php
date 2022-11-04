    <?php 
        include_once("conectar.php");
    ?>

    <html> <!-- HTML -->

    <head>
    <title>Amigopet</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    </head>

    <body>

        <header>
                <h3>Cadastrar Solicitações</h3>
        </header>

        <div class="livro">

                <h3>CADASTRE UMA SOLICITAÇÃO</h3><br><br>

                <form method="post" action="cadastro_livro.php">

                    <label>
                    <p>Nome</p> <br><input type="text" name="descricao" id="id_nome" placeholder="Nome do Objeto"
                        size="60"><br><br>
                </label>

                <label>
                    <p>Descrição</p><br>
                    <textarea name="motivo" rows="5" cols="52"></textarea>
                </label><br><br>

                <label>
                    <p>Quantidade</p> <br><input type="number" name="quantidade">
                </label><br><br>

                <br><label>
                    <p>Parceiros</p>
                    <select name="categoria" required>
                    </select><br><br>

                    <br><br><button type="submit" name="Post" value="1">Solicitar</button>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.html"><input type="button" value="Voltar"></a>

                </form>
            </div>

        <footer>
            <br class="clearfix" />
        </footer>

    </body>
    </html>


<!-- Conexão PHP -->


<?php
INSERT INTO `doacao_solicitacao`(`id_solicitacao`, `descricao`, `motivo`, `quantidade`, `categoria`, `ativo`, `fk_categoria_id`, `fk_parceiro_id`, `fk_protetor_id`, `fk_doador_id`, `data_cadastro`, `imagem`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')

?>