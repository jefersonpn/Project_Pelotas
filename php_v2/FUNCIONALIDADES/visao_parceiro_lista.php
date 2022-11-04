<?php
include_once("conectar.php");
?>

<html> 

    <head>
    <title>AmigoPet - Parceiro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    </head>

    <body>

        <header>
                <h3>Lista de Doações</h3>
        </header>

            <h3>Lista de Doações</h3>

            <form method="post" action="lista_doacao.php">
            <table border="1px" cellpadding="5px" cellspacing="0">
                <!-- Lista com doações do usuário parceiro -->
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ativo</th>
                        <th></th>
                        <th></th>
                    </tr>
                    

                    <!-- informações que aparecerá na tabela com status -->
                <?php 
                        $nome=$parceiro['nome'];
                        $email=$parceiro['email'];
                        $telefone=$parceiro['telefone'];
                        $ativo=$parceiro['ativo'];
                        echo "<tr class='dif'><td>".$nome."</td>";
                        echo "<td>".$nome."</td>";
                        echo "<td>".$email."</td>";
                        echo "<td>".$telefone."</td>";
                        if ($ativo) {
                            echo "<td>Buscou</td>";
                        }else{
                            echo "<td>Não Buscou</td>";
                        } 
                    
                    mysqli_close($conexao)
                ?>
                </table>
            </form>
        </div>
    </body>
</html>
