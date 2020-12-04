<?php

    class Connection
{
    public static function getDb()
    {

        // Conexão ao Banco de Dados
        $conn = new PDO(
            "mysql:host=localhost;dbname=fseletro;charset=utf8",
            "root",
            ""
        );

        // Verificando a conexão
        if ($conn) {
            return $conn;
        } else {
            echo "<h5>A conexão ao Banco de Dados falhou</h5>";
        }
    }
}