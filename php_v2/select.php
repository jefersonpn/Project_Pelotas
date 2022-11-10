<?php

  $sql_doador= "Select * from `doacao_voluntaria`" ;
  $result=mysqli_query($conn, $sql_doador);
  while($row=mysqli_fetch_assoc($result)) {
     $id=$row['id_doacao']; 
     $descricao=$row['descricao']; 
     $status=$row['status'];
    $quantidade=$row['quantidade']; 
    $imagem=$row['imagem']; 
    $data_cadastro=$row['data_cadastro'];
    $id_parceiro=$row['fk_parceiro_id']; 
    $id_doador=$row['fk_doador_id']; 
    
    echo "<p>" .$id." ".$descricao." ".$status." ".$quantidade." ".$imagem." ".$data_cadastro." ".$id_parceiro." ".$id_doador." </p>" ;


    $sql_parceiro= "Select * from `parceiro` where `id_parceiro` = '$id_parceiro'";
    $result= mysqli_query($conn, $sql_parceiro);
    while($row=mysqli_fetch_assoc($result))
    {
      $id_parceiro=$row['id_parceiro'];
      $nome_parceiro=$row['nome'];
      $email_parceiro=$row['email'];
      $telefone_parceiro=$row['telefone'];
      $data_cadastro_parceiro=$row['data_cadastro'];
      $imagem_parceiro=$row['imagem'];
      $cnpj_parceiro=$row['cnpj'];

      echo "<p>".$id_parceiro ." ".$nome_parceiro." ".$email_parceiro." ".$telefone_parceiro." ".$imagem_parceiro."
        ".$data_cadastro_parceiro." ".$cnpj_parceiro."</p>" ;

    }
  }

  ?>

<form action="cadastro_doacao_voluntaria.php" method="POST">
  <th><button formaction="deletar_item.php" type=" submit" class="Deletar">Deletar</button></th>
  <th>
    <button formaction="cadastro_doacao_voluntaria.php" type="submit" class="Doar">+ Doar</button>
  </th>
</form>