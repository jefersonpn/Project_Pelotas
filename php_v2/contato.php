<?php 
include_once("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->


<!-- INICIO CONTATO -->

<div class="container_contato">

  <h3>Formulário de contato - AMIGOPET</a></h3><br><br>

  <form method="post" action="send_contato.php" onsubmit="validaForm(); return false;" class="form">

    <p>
      <label for="name">Nome</label>
      <input type="text" name='nome' placeholder="Nome" />
    </p><br>

    <p>
      <label for="email">E-mail</label>
      <input type="text" name='email' placeholder="mail@exemplo.com" />
    </p><br>

    <p>
      <label for="mensagem">Mensagem<br><br></label>
      <textarea name='mensagem' placeholder="Escreva sua mensagem" /></textarea>
    </p><br><br>

    <p>
      <input class="button" type="submit" name="send" value="Enviar Mensagem" />
    </p><br>

  </form>
</div>

<!-- FIM CONTATO -->

<!--INICIO RODAPE -->

<?php include('rodape.php'); ?>

<!--FIM RODAPE -->


</body>

</html>