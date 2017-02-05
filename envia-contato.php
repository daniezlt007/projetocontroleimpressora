<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.live.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "danielzt007@outlook.com";
$mail->Password = "danielzt007ruwu0101ha";

$mail->setFrom("danielzt007@outlook.com", "Daniel da Silva");
$mail->addAddress("danielzt007@outlook.com");
$mail->Subject = "Email de Contato da Loja";
$mail->msgHTML("<html>de:{$nome}<br/>email:{$email}<br/>mensagem:{$mensagem}</html>");
$mail->AltBody = "De:{$nome}\nEmail:{$email}\nMensagem:{$mensagem}";

if($mail->send()){
    $_SESSION["sucess"] = "Mensagem enviada com sucesso!";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar Mensagem" . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();