<?php 
include_once("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->

      <head>
        <title>AmigoPet - Solicitação</title>
        <link rel="stylesheet" type="text/css" href="formulario.css" />
      </head>

      <body>

        <div class="cadastrar_doacoes_solicitacoes">

        <header>
          <h3>Cadastrar Solicitação</h3>
        </header><br>

        <form method="post" action="cadastro_doacao_voluntaria.php">

          <label>
            <p>Nome</p> <input type="text" name="descricao" id="id_nome" placeholder="Nome do Objeto"
              size="25">
          </label><br><br>

          <label>
            <p>Descrição</p> 
            <textarea name="motivo" rows="5" cols="52"></textarea>
          </label><br>

          <label><br>
            <p>Quantidade</p><input type="number" name="quantidade">
          </label><br>

          <br><label>
            <p>Parceiros</p>
            <select name="categoria" required>
            </select><br><br><br><br>

            <button type="submit" name="Post" value="1">Solicitar</button>&nbsp&nbsp&nbsp&nbsp&nbsp<a
              href="index.html"><input type="button" value="Voltar"></a>

        </form>
        </div>

    <!--INICIO RODAPE -->
    <?php include('rodape.php'); ?>
    <!--FIM RODAPE -->

    </body>

    </html>