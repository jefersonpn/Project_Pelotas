<?php
// colocar no git
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


<div class="flex-container">
  <div class="flex-child container_login">
    <form method="post" action="fazer_login.php?login=1">

      <h3>AMIGOPET</h3>
      <h4>PROTETOR</h4><br>

       Ainda não tem conta?
        <a href="form_cad_protetor.php">Cadastre-se</a>
      </p><br>
      <br><br>
        
      <div style="margin-top:-80px;">
        <label for="email_login">E-mail&nbsp;</label><br>
        <input id="email_login" name="email_login" required="required" type="text"
          placeholder="contato@amigopet.com" /><br><br>



        <label for="senha_login">Senha&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
        <input id="senha_login" name="senha_login" required="required" type="password" placeholder="senha" /><br>


        <p><br>
          <input class="btn btn-success" type="submit" value="Logar" />
        </p><br>
      </div>
    </form>
  </div>

  <div class="flex-child container_login">
    <form method="post" action="fazer_login.php?login=2">

      <h3>AMIGOPET</h3>
      <h4>DOADOR</h4>
      <br>
      Ainda não tem conta?
        <a href="form_cad_doador.php">Cadastre-se</a>
      </p><br>
      <br>

      <div style="margin-top:-80px;"><br>
        <label for="email_login">E-mail&nbsp;</label><br>
        <input id="email_login" name="email_login" required="required" type="text"
          placeholder="contato@amigopet.com" /><br><br>

        <label for="senha_login">Senha&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
        <input id="senha_login" name="senha_login" required="required" type="password" placeholder="senha" /><br>
        <p><br>
          <input class="btn btn-success" type="submit" value="Logar" />
        </p><br>
      </div>
    </form>
  </div>

  <div class="flex-child container_login">
    <form method="post" action="fazer_login.php?login=3">

      <h3>AMIGOPET</h3>
      <h4>PARCEIRO</h4>
      <br>

        Ainda não tem conta?
        <a href="form_cad_parceiro.php">Cadastre-se</a>
      </p><br>
      <br><br>

      <div style="margin-top:-80px;">
        <label for="email_login">E-mail&nbsp;</label><br>
        <input id="email_login" name="email_login" required="required" type="text"
          placeholder="contato@amigopet.com" /><br><br>

        <label for="senha_login">Senha&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
        <input id="senha_login" name="senha_login" required="required" type="password" placeholder="senha" /><br>
      </div>

      <p><br>
        <input class="btn btn-success " type="submit" value="Logar" />
      </p><br>

    </form>
  </div>

</div>
<!-- FIM LOGIN -->

<!--INICIO RODAPE -->

<?php include('rodape.php'); ?>

<!--FIM RODAPE -->


</body>

</html>
