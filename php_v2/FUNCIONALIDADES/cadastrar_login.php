<!DOCTYPE HTML>
<html lang="pt-br">

  <?php 

include_once("conectar.php");

?>

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

    <!--FORMULÁRIO DE CADASTRO-->

 <div class="container_cadastro">

        <h3 style="display: flex" ;>Cadastrar&nbsp;
            <span id="titulo_fisica" style="display: none;">Doador</span>
            <span id="titulo_protetor" style="display: none;">Protetor</span>
            <span id="titulo_juridica" style="display: none;">Parceiro</span>
        </h3>

        <!-- <form method="post" action=""><br><br>

            <label><input type="" name="tipo_usuario" value="1" onchange="formfisica();" />Doador</label>
            <!-- <label><input type="radio" name="tipo_usuario" value="2" onchange="formprotetor();" />Protetor</label>
            <label><input type="radio" name="tipo_usuario" value="3"
                    onchange="formjuridica();" />Parceiro</label><br><br>-->

    <!-- doador 
        <form method="post" action="" id="form_fisica" style="display: none" ;>
            <label>Nome</label>
            <input type="text" name="nome1" placeholder="Nome Completo"><br><br>

            <label>E-mail</label>
            <input type="text" name="email1" placeholder="Digite seu email"><br><br>

            <label>Telefone</label>
            <input type="text" name="telefone1" placeholder="Digite seu telefone"><br><br>

            <label>Cidade</label>
            <input type="text" name="cidade1" placeholder="Digite a sua cidade"><br><br>

            <label>Login</label>
            <input type="text" name="logind1" placeholder="Digite seu login"><br><br>

            <label>Senha</label>
            <input type="text" name="senha1" placeholder="Digite a senha"><br><br>

            <div id="form_botao_cadastrar" style="display: none;">
                <input type="submit" name="enviar" value="Cadastrar"><br><br>
            </div>

        </form>

        <!-- protetor 
        <div id="form_protetor" style="display: none" ;>
            <label>Nome</label>
            <input type="text" name="nome2" placeholder="Nome Completo"><br><br>

            <label>E-mail</label>
            <input type="text" name="email2" placeholder="Digite seu email"><br><br>

            <label>Telefone</label>
            <input type="text" name="telefone2" placeholder="Digite seu telefone"><br><br>

            <label>Cidade</label>
            <input type="text" name="cidade2" placeholder="Digite a sua cidade"><br><br>

            <label>Login</label>
            <input type="text" name="loginp2" placeholder="Digite seu login"><br><br>

            <label>Senha</label>
            <input type="text" name="senha2" placeholder="Digite a senha"><br><br>
        </div>

        <!-- parceiro 
        <div id="form_juridica" style="display: none" ;>
            <label>Nome Fantasia</label>
            <input type="text" name="nomefantasia3" placeholder="Nome Fantasia"><br><br>

            <label>CNPJ</label>
            <input type="text" name="cnpj3" placeholder="Digite seu CNPJ"><br><br>

            <label>E-mail</label>
            <input type="text" name="email3" placeholder="Digite seu email"><br><br>

            <label>Telefone</label>
            <input type="text" name="telefone3" placeholder="Digite seu telefone"><br><br>

            <label>Cidade</label>
            <input type="text" name="cidade3" placeholder="Digite a sua cidade"><br><br>

            <label>Login</label>
            <input type="text" name="loginpa3" placeholder="Digite seu login"><br><br>

            <label>Senha</label>
            <input type="text" name="senha3" placeholder="Digite a senha"><br><br>
        </div>

        <div id="form_botao_cadastrar" style="display: none;">
            <input type="submit" name="enviar" value="Cadastrar"><br><br>
        </div>
        </form> -->


    <script>
    function formfisica() {
      //console.log("pessoa fisica");
      document.getElementById("titulo_fisica").style.display = 'block';
      document.getElementById("titulo_juridica").style.display = 'none';
      document.getElementById("titulo_protetor").style.display = 'none';

      // desaparece o formulário do protetor e parceiro
      document.getElementById("form_fisica").style.display = 'block';
      document.getElementById("form_protetor").style.display = 'none';
      document.getElementById("form_juridica").style.display = 'none';

      // Apresentar o botão de cadastrar
      document.getElementById("form_botao_cadastrar").style.display = 'block';
    }

    function formprotetor() {
      //console.log("pessoa fisica");
      document.getElementById("titulo_protetor").style.display = 'block';
      document.getElementById("titulo_juridica").style.display = 'none';
      document.getElementById("titulo_fisica").style.display = 'none';

      // desaparece o formulário do doador e parceiro
      document.getElementById("form_protetor").style.display = 'block';
      document.getElementById("form_fisica").style.display = 'none';
      document.getElementById("form_juridica").style.display = 'none';

      // Apresentar o botão de cadastrar
      document.getElementById("form_botao_cadastrar").style.display = 'block';
    }

    function formjuridica() {
      //console.log("pessoa juridica");
      document.getElementById("titulo_juridica").style.display = 'block';
      document.getElementById("titulo_fisica").style.display = 'none';
      document.getElementById("titulo_protetor").style.display = 'none';

      // desaparece o formulário do protetor e doador
      document.getElementById("form_juridica").style.display = 'block';
      document.getElementById("form_fisica").style.display = 'none';
      document.getElementById("form_protetor").style.display = 'none';

      // Apresentar o botão de cadastrar
      document.getElementById("form_botao_cadastrar").style.display = 'block';
    }
    </script>

  </body>

</html>