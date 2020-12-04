<?php

require "Models/Product.php";

// Libera o cors e outras aplicações
header("Access-Control-Allow-Origin:*");
// Indica o conteúdo JSON
header("Content-type: application/json");

// Consultando e retornando um conjunto de registro em uma matriz 
$products = Product::getAll();


print_r(json_encode($products));