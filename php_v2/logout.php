<?php
session_start();
($_SESSION['usuario_logado'] = '');
session_destroy();

header('Location: index.php');
exit();
?>