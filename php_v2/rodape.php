        <?php 
    switch ($_GET['title'])
{
    case '':
        echo "<title>Home - Amigo Pet</title>";
        break; 
    case 'home':
        echo "<title>Home - Amigo Pet</title>";
        break;
    case 'contato':
        echo "<title>Contato - Amigo Pet</title>";
        break;
    case 'sobre':
        echo "<title>Sobre - Amigo Pet</title>";
        break;
    case 'parceiro':
        echo "<title>Parceiro - Amigo Pet</title>";
        break;
    case 'login':
        echo "<title>Login - Amigo Pet</title>";
        break;
    case 'cadastrar':
        echo "<title>Cadastro - Amigo Pet</title>";
        break;
}
    ?>


    <!--INICIO RODAPE-->
    <footer>
        <footer id="rodape">
            <img class="logo2" alt="AMIGO PET" width="150x" src="img/logo.png" />

            <div class="sitemap">
              <ul class="menu">
                <li><a href="index.php?title=home">Home</a></li>
                <li><a href="contato.php?title=contato">Contato</a></li>
                <li><a href="sobre.php?title=sobre">Sobre</a></li>
                <li><a href="parceiro.php?title=parceiro">Parceiro</a></li>
                <li><a href="login.php?title=login">Cadastrar | Login</a></li>
             </ul>
            </div>

            <div class="direitos_autorais">
                Instituto Amigo Pet © 2022 Todos os direitos reservados.
                Consulte nossa Política de Privacidade.
            </div>
        </footer>
        <!--FIM RODAPE-->

</body>

</html>