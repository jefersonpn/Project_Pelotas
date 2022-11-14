<?php 
    include("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->

<!--FORMULÁRIO DE CADASTRO-->
<div class="container">
  <div class=" text-center mt-5 ">
    <h1>Formulário de contato - AMIGOPET</h1>
  </div>
  <form method="post" action="send_contato.php" onsubmit="validaForm(); return false;" class="form">
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
          <div class="card-body bg-light">

            <div class="container">
              <form id="contact-form" role="form">



                <div class="controls">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="nome">Nome completo*</label>
                        <input id="nome" type="text" name="nome" class="form-control"
                          placeholder="Nome para te identificar. *" required="required"
                          data-error="Nome é  obrigatório.">

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="email">E-mail*</label>
                        <input id="email" type="text" name="email" class="form-control" placeholder="Seu email. *"
                          required="required" data-error="Email é  obrigatório.">

                      </div>
                    </div>
                  </div>
                  </br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="mensagem">Mensagem</br></br></br></br></br></label>
                        <textarea name='mensagem' placeholder="Escreva sua mensagem"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " name="send" value="Enviar Mensagem">
                  </div>
                </div>
            </div>
  </form>
</div>
</div>


</div>
<!-- /.8 -->

</div>
<!-- /.row-->

</div>
</div>

<!--INICIO RODAPE -->
<?php include('rodape.php'); ?>
<!--FIM RODAPE -->
<div class="container_contato">

  </body>

  </html>