<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$banco = 'protetor'; //mudar nome do banco
$conexao = new mysqli($host, $user, $pass, $banco);

if (mysqli_connect_error()) {
    die(
        'Não foi possível conectar-se ao banco de dados: ' .
            mysqli_connect_error()
    );
    exit();
}
?>