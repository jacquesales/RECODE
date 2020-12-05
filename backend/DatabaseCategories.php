<?php

require "Models/Database.php";

// Libera o cors e outras aplicações
header("Access-Control-Allow-Origin:*");
// Indica o conteúdo JSON
header("Content-type: application/json");

$database = new Database();

echo(json_encode($database->VendasPorCategoria()));