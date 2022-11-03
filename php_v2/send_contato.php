<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])){
    $mail = new PHPMailer(true);
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'amigopetsite@gmail.com';
    $mail->Password = 'bppmuyzrsynppbbu';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST['email']);
    
    $mail->addAddress('amigopetsite@gmail.com');

    $mail->isHTML(true);
    
    $mail->Subject = "Mensagem do site AmigoPET - Formulario de contato";
    $mail->Body = "Nome: <p>".$_POST['nome']."</p> E-mail: <p>".$_POST['email']."</p><p>Mensagem: </p><p>".$_POST['mensagem']."</p>";
    
    $mail->send();

    echo 
    "
    <script>
    alert('Mensagem enviada com Sucesso!');
    document.location.href = 'contato.php';
    </script>
    ";
}

?>