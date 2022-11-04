<?php
include_once("conectar.php");
?>

<html> 

    <head>
    <title>Amigo Pet</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    </head>

    <body>

        <header>
                <h3>Lista de Solicitação</h3>
        </header>

            <h3>Lista de Solicitações</h3>

            <form method="post" action="editar_doacao_solicitacao.php">
            <table border="1px" cellpadding="5px" cellspacing="0">
                <!-- Lista com solicitações do usuário protetor -->
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ativo</th>
                        <th></th>
                        <th></th>
                    </tr>
                    

                    <!-- informações que aparecerá na tabela -->
                <?php 
                        $nome=$solicitacao['nome'];
                        $email=$solicitacao['email'];
                        $telefone=$solicitacao['telefone'];
                        $ativo=$solicitacao['ativo'];
                        echo "<tr class='dif'><td>".$nome."</td>";
                        echo "<td>".$nome."</td>";
                        echo "<td>".$email."</td>";
                        echo "<td>".$telefone."</td>";
                        if ($ativo) {
                            echo "<td>Buscou</td>";
                        }else{
                            echo "<td>Não Buscou</td>";
                        } //botões de excluir e editar na tabela de solicitações
                        echo "<td><button name='Edit' value=' '>EDITAR</button></td>";
                        echo "<td><button name='Delete' value=' '>EXCLUIR</button></td></tr>";
                    }
                    mysqli_close($conexao)
                ?>
                </table>
            </form>
        </div>
    </body>
</html>
