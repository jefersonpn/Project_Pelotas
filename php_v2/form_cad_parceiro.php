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
  <form method="post" action="insert_parceiro.php" enctype="multipart/form-data">
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
          <div class="card-body bg-light">

            <div class="container">

              <div class="controls">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="nomefantasia">Nome Fantasia </label>
                      <input id="nomefantasia" type="text" name="nomefantasia" class="form-control"
                        placeholder="Nome fantasia para te identificar. *" required="required"
                        data-error="Nome  Fantasia é  obrigatório.">

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
                      <label for="cnpj">CNPJ *</label>
                      <input id="cnpj" type="number" size="10" name="cnpj" class="form-control"
                        placeholder="37556661000190 *" required="required" data-error="Cnpj é obrigatorio.">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="endereco">Endereço *</label>
                      <input id="endereco" type="text" name="endereco" class="form-control"
                        placeholder="Endereço completo *" required="required" data-error="Endereço é obrigatorio.">
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
                <div class="row">
                  <!-- UPLOAD Image -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="imagem">Logo</label>
                      <input id="imagem" type="file" name="imagem" class="form-control p-1">
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Cadastrar">
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