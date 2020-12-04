<?php

// Libera o cors e outras aplicações
header("Access-Control-Allow-Origin:*");
// Indica o conteúdo JSON
header("Content-type: application/json");


include_once("Message.php");


$message = new Message();

$message -> nome = $_POST['name'];
$message -> email = $_POST['email'];
$message -> assunto = $_POST['subject'];
$message -> mensagem = $_POST['message'];

$message -> Register();
echo $message -> Register();