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
    <title>Editar Cadastro - Amigo Pet</title>

    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/parceiro_cabecalho.css" />
    <link rel="stylesheet" type="text/css" href="css/parceiro_rodape.css" />
    <link rel="stylesheet" type="text/css" href="css/parceiroEstilo.css" />
    <link rel="stylesheet" type="text/css" href="css/parceiro.css" />

  </head>

  <body>

    <!--INICIO CABEÇALHO-->

    <?php include('cabecalho.php'); ?>

    <!--FIM CABEÇALHO-->


    <!-- EDITAR CADASTRO -->

    <div class="posicao_padrao">

      <h3>Editar Cadastro</h3><br>

      <form name="foto_doacao" type="text" method="post" enctype="multipart/form-data" action="upload.php">
        <label>Foto <input type="file" required name="imagem" />
          <input type="submit" id="button_upload" value="Enviar" />

          <label>
            <p>Nome</p> <br><input type="text" name="nome_inf" id="id_nome" placeholder="Insira seu Nome"
              size="60"><br><br>

            <label>
              <p>CNPJ</p> <br><input type="text" name="nome_inf" id="id_cnpj" placeholder="Insira seu CNPJ" size="60">
            </label><br><br>

            <label>
              <p>Inscrição Estadual</p> <br><input type="text" name="nome_inf" id="id_ie"
                placeholder="Insira a Inscrição Estadual" size="60">
            </label><br><br>

            <label>
              <p>Nome Fantasia</p> <br><input type="text" name="nome_inf" id="id_email"
                placeholder="Insira seu Nome Fantasia" size="60">
            </label><br><br>

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
              <p>Endereço</p> <br><input type="text" name="nome_inf" id="id_cidade" placeholder="Insira seu endereço"
                size="60">
            </label><br><br>

            <label>
              <p>Número</p> <br><input type="text" name="cep" id="cep" placeholder="Número da residência">
            </label><br><br>

            <label>
              <p>CEP</p> <br><input type="text" name="cep" id="cep" placeholder="Insira seu CEP">
            </label><br><br>

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
          <li><a href="parceiro.html">Doação</a></li>
          <li><a href="parceiro.html">Solicitação</a></li>
          <li><a href="parceiro.html">Sair</a></li>
        </div>

        <div class="direitos_autorais">
          Instituto Amigo Pet © 2022 Todos os direitos reservados.
          Consulte nossa Política de Privacidade.
        </div>
      </footer>
      <!--FIM RODAPE-->

  </body>

</html>