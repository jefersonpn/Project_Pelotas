<?php 
include_once("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->


<!-- INICIO TELA PRINCIPAL PROTETORES -->

<div class="posicao_padrao1">

  <section class="container_amigoPet">

    <div>
      </br>
      <h2>Seja bem vindo <?php echo $_SESSION['usuario_logado']['0']; ?></h2>
    </div>

    <div>
      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
              <h2 class="heading-section">Painel do Parceiro</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h3 class="h5 mb-4 text-center">Lista de doações</h3>
              <div class="table-wrap">
                <table class="table">
                  <thead class="thead-primary">
                    <tr>
                      <th><button type="button" class="Coletar">Salvar</button></th>
                      <th><label for="status">Status</label>
                        <select name="status" id="status">
                          <option value="volvo">Disponivel</option>
                          <option value="saab">Aguardando</option>
                          <option value="opel">Retirado</option>
                        </select>
                      </th>
                      <th>Descrição</th>
                      <th>Status</th>
                      <th>Doador</th>
                      <th>&nbsp;</th>
                      <th>&nbsp;</th>
                      <th>Soliciitante</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="alert" role="alert">
                      <td>
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox" checked>
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td>
                        <div class="img" style="background-image: url(images/product-1.png);"></div>
                      </td>
                      <td>
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="Coletar">Salvar</button></td>
                      <td><label for="status">Status</label>
                        <select name="status" id="status">
                          <option value="volvo">Disponivel</option>
                          <option value="saab">Aguardando</option>
                          <option value="opel">Retirado</option>
                        </select>
                      </td>
                      <td><button type="button" class="ver">Ver</button></td>

                    </tr>

                    <tr class="alert" role="alert">
                      <td>
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td>
                        <div class="img" style="background-image: url(images/product-2.png);"></div>
                      </td>
                      <td>
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="Coletar">Salvar</button></td>
                      <td><label for="status">Status</label>
                        <select name="status" id="status">
                          <option value="volvo">Disponivel</option>
                          <option value="saab">Aguardando</option>
                          <option value="opel">Retirado</option>
                        </select>
                      </td>
                      <td><button type="button" disabled="disabled" class="ver">Ver</button></td>
                    </tr>


                    <tr class="alert" role="alert">
                      <td>
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td>
                        <div class="img" style="background-image: url(images/product-3.png);"></div>
                      </td>
                      <td>
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="Coletar">Salvar</button></td>
                      <td><label for="status">Status</label>
                        <select name="status" id="status">
                          <option value="volvo">Disponivel</option>
                          <option value="saab">Aguardando</option>
                          <option value="opel">Retirado</option>
                        </select>
                      </td>
                      <td><button type="button" class="ver">Ver</button></td>
                    </tr>


                    <tr class="alert" role="alert">
                      <td>
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td>
                        <div class="img" style="background-image: url(images/product-4.png);"></div>
                      </td>
                      <td>
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="Coletar">Salvar</button></td>
                      <td><label for="status">Status</label>
                        <select name="status" id="status">
                          <option value="volvo">Disponivel</option>
                          <option value="saab">Aguardando</option>
                          <option value="opel">Retirado</option>
                        </select>
                      </td>
                      <td><button type="button" class="ver">Ver</button></td>
                    </tr>


                    <tr class="alert" role="alert">
                      <td class="border-bottom-0">
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td class="border-bottom-0">
                        <div class="img" style="background-image: url(images/product-1.png);"></div>
                      </td>
                      <td class="border-bottom-0">
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="Coletar">Salvar</button></td>
                      <td><label for="status">Status</label>
                        <select name="status" id="status">
                          <option value="volvo">Disponivel</option>
                          <option value="saab">Aguardando</option>
                          <option value="opel">Retirado</option>
                        </select>
                      </td>
                      <td><button type="button" class="ver">Ver</button></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
    </div>


    <!-- FIM TELA PRINCIPAL PROTETORES -->

    <!--INICIO RODAPE -->
    <?php include('rodape.php'); ?>
    <!--FIM RODAPE -->

    </body>

    </html>