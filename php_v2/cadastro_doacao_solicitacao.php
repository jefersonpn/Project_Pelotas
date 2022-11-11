<?php 
include_once("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->

<?php
  session_start();
  //print_r($_SESSION['usuario_logado']); 
  
?>

<!--FORMULÁRIO DE CADASTRO-->
<div class="container">
  <div class=" text-center mt-5 ">
    <h1>Cadastro de Solicitação - AMIGOPET</h1>
  </div>
  <form method="post" action="insert_doacao.php" enctype="multipart/form-data" onsubmit="validaForm(); return false;"
    class="form">
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
                        <label for="descricao">Descrição *</label>
                        <input id="descricao" type="text" name="descricao" class="form-control"
                          placeholder="Descrição do item. *" required="required" data-error="Descrição é obrigatório.">

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="quantidade">Quantidade *</label>
                        <input id="quantidade" type="number" name="quantidade" class="form-control" required="required"
                          data-error="Quantidade é  obrigatório.">

                      </div>
                    </div>
                    </div>
                    </div>
                  </div>

                  </br>
                  <div class=" row">
                    <!-- UPLOAD Image -->
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="imagem">Foto</label>
                        <input id="imagem" type="file" name="imagem" class="form-control p-1">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " name="submit" value="Cadastrar">
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
