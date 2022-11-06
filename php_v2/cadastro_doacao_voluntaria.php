    <?php 
        include_once("conectar.php");
    ?>

    <html>
      <!-- HTML -->

      <head>
        <title>AmigoPet</title>
        <link rel="stylesheet" type="text/css" href="estilo.css" />
      </head>

      <body>

        <header>
          <h3>Cadastrar Doação</h3>
        </header>

        <h3>CADASTRE UMA DOAÇÃO</h3><br><br>

        <form method="post" action="cadastro_doacao_voluntaria.php">

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

            <br><br><button type="submit" name="Post" value="1">Doar</button>&nbsp&nbsp&nbsp&nbsp&nbsp<a
              href="index.html"><input type="button" value="Voltar"></a>

        </form>
        </div>

        <footer>
          <br class="clearfix" />
        </footer>

      </body>

    </html>

    <!-- Conexão php -->