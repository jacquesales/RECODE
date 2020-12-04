<?php

require "Connection.php";

class Request
{
    public $nomeCliente;
    public $cpf;
    public $cep;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $estado;
    public $telefone;
    public $categoria;
    public $descricao;
    public $quantidade;
    public $observacao;


    public static function getAll() 
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM pedidos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function registerRequest()
        {
            $connection = Connection::getDb();

            $stmt = $connection->query("INSERT INTO pedidos (nomeCliente, cpf, cep, logradouro, numero, 
            complemento, bairro, cidade, estado, telefone, categoria, descricao, quantidade, observacao) 
            values ('$this->nomeCliente', '$this->cpf', '$this->cep', '$this->logradouro', '$this->numero',
            '$this->complemento', '$this->bairro', '$this->cidade', '$this->estado', '$this->telefone',
            '$this->categoria', '$this->descricao', '$this->quantidade', '$this->observacao')");                      
            
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
}