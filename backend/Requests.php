<?php

require "Models/Request.php";

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json");

$requests = Request::getAll();

print_r(json_encode($requests));