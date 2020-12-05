<?php

require "Connection.php";

class Database
{

    public $idProduto;
    public $categoria;
    public $quantidade; 


    public static function RelatorioVendas()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT pedidos.idPedido,
                                    produtos.descricao AS Produto,
                                    pedidos.quantidade AS Quantidade,
                                    produtos.precoFinal * pedidos.quantidade AS ValorDaVenda
                                    FROM produtos INNER JOIN pedidos
                                    ON produtos.idProduto = pedidos.idProduto
                                    ORDER BY pedidos.idPedido");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);        
    }



    public static function VendasPorCategoria()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT pedidos.categoria,COUNT(*) AS TotalVendido
                                    FROM pedidos
                                    INNER JOIN produtos 
                                    ON produtos.idProduto = pedidos.idProduto 
                                    GROUP BY pedidos.categoria");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}