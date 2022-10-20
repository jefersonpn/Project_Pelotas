<?php
include('conectar.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "";
        
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: amigopet.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->


<!-- INICIO LOGIN -->

<div class="container_login">

  <h3>AMIGOPET</h3>

  <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
  <div class="notification is-danger">
    <p>ERRO: Usuário ou senha inválidos.</p>
  </div>

  <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
        ?>

  <form action="login.php" method="POST">
    <div class="field">
      <div class="control">
        <input name="usuario" name="text" placeholder="Seu usuário" autofocus="">
      </div>
    </div>

    <div class="field">
      <div class="control">
        <input name="senha" type="password" placeholder="Sua senha">
      </div>
    </div>

    <div class="field">
      <a href="cadastro.php">Cadastrar</a>
    </div>

    <button type="submit">Entrar</button>
  </form>

  <!-- <p class="link">Faça o seu login<br><br><br>

            Ainda não tem conta?
            <a href="cadastrar_login.php">Cadastre-se</a>
        </p><br><br>

        <form action="" method="POST">
            <p>
                <label>E-mail</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <button type="submit">Entrar</button>
            </p>
        </form> -->

  <!-- FIM LOGIN -->

  <!--INICIO RODAPE-->
  <footer>
    <footer id="rodape">
      <img class="logo2" alt="AMIGO PET" width="150x" src="img/logo.png" />

      <div class="sitemap">
        <li><a href="home.php">Home</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="parceiro.php">Parceiro</a></li>
        <li><a href="login.php">Cadastrar | Login</a></li>
      </div>

      <div class="direitos_autorais">
        Instituto Amigo Pet © 2022 Todos os direitos reservados.
        Consulte nossa Política de Privacidade.
      </div>
    </footer>
    <!--FIM RODAPE-->


    </body>

    </html>
