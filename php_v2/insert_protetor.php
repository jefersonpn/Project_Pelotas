<?php
//including code for database conection
include 'conectar.php';
//connecting to database
$conn = getConnection();
//after this point you are connected

//the query for the database
$sql = 'INSERT INTO protetor (nome, email, telefone, cidade, login_protetor, senha_protetor) VALUES (:nome,:email,:telefone,:cidade,:login_protetor,:senha_protetor)';


//Using the bindParam you can pass values by Variables
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$login_protetor= $_POST['login'];
$senha_protetor= $_POST['senha'];
 
echo $nome;

$stmt = $conn->prepare($sql);
$stmt->bindParam(1,$nome);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $telefone);
$stmt->bindParam(4, $cidade);
$stmt->bindParam(4, $login_protetor);
$stmt->bindParam(4, $senha_protetor);


if($stmt->execute()){
    echo 'Protetor adicionado com sucesso!';
}else{
    echo 'Erro ao tentar inserir protetor'. error_log($sql);
}


?>