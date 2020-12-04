<?php

require "Connection.php";

class Product 
{
    public $categoria;
    public $imagem;
    public $descricao;
    public $precoAnterior;
    public $precoFinal;

    public static function getAll() 
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}