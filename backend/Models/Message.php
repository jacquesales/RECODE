<?php

// Libera o cors e outras aplicações
header("Access-Control-Allow-Origin:*");
// Indica o conteúdo JSON
header("Content-type: application/json");

require "Connection.php";

class Message
{

    public $nome;
    public $email;
    public $assunto;
    public $mensagem;

    public static function getAll() 
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM mensagens");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Registro das mensagens no banco de dados 
    public function Register()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("INSERT INTO mensagens (`nome`,`email`,`assunto`,`mensagem`) 
        VALUES ('$this->nome','$this->email','$this->assunto','$this->mensagem')");
        return $stmt->rowCount;
    }
}