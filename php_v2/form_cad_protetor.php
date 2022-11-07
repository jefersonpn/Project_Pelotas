<?php 
    include("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->

<!--FORMULÁRIO DE CADASTRO-->
<div class="container">
  <div class=" text-center mt-5 ">
    <h1>Cadastro de Protetor</h1>
  </div>
  <form method="post" action="insert_protetor.php">
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
          <div class="card-body bg-light">

            <div class="container">

              <div class="controls">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="nome">Nome completo*</label>
                      <input id="nome" type="text" name="nome" class="form-control"
                        placeholder="Nome para te identificar. *" required="required" data-error="Nome é  obrigatório.">

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

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="telefone">Telefone *</label>
                      <input id="telefone" type="text" size="12" name="telefone" class="form-control"
                        placeholder="DD 999999999 *" required="required" data-error="Telefone é obrigatorio.">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cidade">Cidade *</label>
                      <input id="cidade" type="text" name="cidade" class="form-control"
                        placeholder="Nome da sua cidade *" required="required" data-error="cidade é obrigatorio.">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="senha">Senha *</label>
                      <input id="senha" type="password" size="10" name="senha" class="form-control"
                        placeholder="Senha *" required="required" data-error="Senha é obrigatorio.">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="conf_senha">Confirma Senha *</label>
                      <input id="conf_senha" type="password" size="10" name="conf_senha" class="form-control"
                        placeholder="Confirmação da senha *" required="required"
                        data-error="confirmação de senha é obrigatorio.">
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Cadastrar">
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