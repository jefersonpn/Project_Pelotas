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


<div class="container_login">

        <form method="post" action="">

            <h3>AMIGOPET</h3>

            <p class="link">Faça o seu login<br><br><br>

                Ainda não tem conta?
                <a href="cad_login.html">Cadastre-se</a>
            </p><br><br>

            <p>
                <label for="email_login">E-mail&nbsp;</label>
                <input id="email_login" name="email_login" required="required" type="text"
                    placeholder="contato@amigopet.com" /><br><br>
            </p>

            <p>
                <label for="senha_login">CPF&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="senha" />
            </p><br><br>

            <p>
                <input class="button" type="submit" value="Logar" />
            </p><br>

        </form>
    </div>


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
