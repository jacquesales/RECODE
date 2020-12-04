<?php

require "Models/Message.php";

// Libera o cors e outras aplicações
header("Access-Control-Allow-Origin:*");
// Indica o conteúdo JSON
header("Content-type: application/json");

$messages = Message::getAll();

print_r(json_encode($messages));