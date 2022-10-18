<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->

<?php
require ("conectar.php");
?>

<?php

// doador
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$logind = $_POST['logind'];
$senha = $_POST['senha'];

$sql = "INSERT INTO doador (id_doador, nome, email, telefone, cidade, login_doador, senha_doador, data_cadastro) 
VALUES (:nome, :email, :telefone, :cidade, :logind, :senha)";

$stmt = $mysqli->prepare($sql);

$params = array(
    ':nome' => $nome, 
    ':email' => $email, 
    ':telefone' => $telefone, 
    ':cidade' => $cidade, 
    ':logind' => $logind,
    ':senha' => $senha
);

$stmt->execute($params);

echo "<script>
          alert('Funcionário cadastrado com sucesso.');
      </script>
      <meta http-equiv='refresh' content='0, url=funcionarios.php'>
";



?>
</body>

</html>