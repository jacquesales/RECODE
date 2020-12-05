<?php

require "Models/Database.php";

// Libera o cors e outras aplicações
header("Access-Control-Allow-Origin:*");
// Indica o conteúdo JSON
header("Content-type: application/json");

$database = new Database();

print_r(json_encode($database->RelatorioVendas()));