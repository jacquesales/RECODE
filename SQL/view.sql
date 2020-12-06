-- Criando o Banco de Dados 'fseletro'
CREATE DATABASE IF NOT EXISTS `fseletro`;

USE `fseletro`;

-- Criando tabela 'produtos' e seus atributos
CREATE TABLE `produtos` (
  `idProduto` INT AUTO_INCREMENT,
  `categoria` VARCHAR(45) NOT NULL,
  `imagem` VARCHAR(255) NOT NULL,
  `descricao` VARCHAR(150) DEFAULT NULL,
  `precoAnterior` DECIMAL(8,2) DEFAULT NULL,
  `precoFinal` DECIMAL(8,2) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE (`imagem`)
) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8 DEFAULT COLLATE=utf8_general_ci;

-- Inserindo os valores na ordem correspondente aos atributos
INSERT INTO `produtos` 
VALUES (NULL,'geladeira','geladeira-brastemp.png','Geladeira Frost Free Brastemp Inverse 540 litros',8389.99,7019.99),
(NULL,'geladeira','geladeira-electrolux.png','Geladeira Frost Free Electrolux Top Freezer 431 litros',6849.99,5129.99),
(NULL,'geladeira','geladeira-bottom.png','Geladeira Frost Free Bottom Inverse 454 litros',7989.99,6609.99),
(NULL,'fogão','fogao-brastemp.png','Fogão 5 Bocas Brastemp Acendimento Automático',4599.99,3719.99),
(NULL,'fogão','fogao-brastemp2.png','Fogão 5 Bocas Brastemp Turbo Chama Timer',5199.99,4479.99),
(NULL,'microondas','microondas-electrolux.png','Microondas Electrolux Tira Odor 20 Litros',1999.99,1729.99),
(NULL,'microondas','microondas-philco.png','Microondas Philco 21 Litros',2959.99,2049.99),
(NULL,'microondas','microondas-electrolux2.png','Microondas Electrolux 20 Litros',2759.99,2499.99),
(NULL,'lavaroupa','maq-lavaeseca-lg.png','Máquina Lava e Seca Roupas 11 Kilos LG',7999.99,6919.99),
(NULL,'lavaroupa','maq-lavar-brastemp.png','Máquina de Lavar Roupas 15 Kilos Brastemp',7839.99,6079.99),
(NULL,'lavalouca','lavaloucas-electrolux.png','Lava-Louças Branca 14 Serviços Electrolux',7399.99,6509.99),
(NULL,'lavalouca','lavaloucas-brastemp.png','Lava-Louças 18 Serviços Brastemp',8899.99,7609.99);


-- Criando a tabela `mensagens`
CREATE TABLE `mensagens` (
  `idMsg` INT AUTO_INCREMENT,
  `data` DATETIME NOT NULL DEFAULT current_timestamp(),
  `nome` VARCHAR(150) NOT NULL,
  `email` VARCHAR(80) NOT NULL,
  `assunto` VARCHAR(25) NOT NULL,
  `mensagem` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`idMsg`)
) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8 DEFAULT COLLATE=utf8_general_ci;

-- Inserindo dados do usuario (aba Fale Conosco) na tabela `mensagens`
INSERT INTO `mensagens` 
VALUES (NULL, '2020-10-27 10:44:57', 'Maria', 'maria@teste.com', 'informacao', 'Olá, mensagem teste'),
(NULL, '2020-10-27 10:46:07', 'João', 'jsd.gomes@exemplo.com.br', 'sugestao', 'Ampliar a gama de produtos'),
(NULL, '2020-10-27 10:55:46', 'Laura', 'laura@exemplo.com', 'elogio', 'Obrigada pelo envio da mercadoria na data prevista');


-- Criando a tabela `pedidos`
CREATE TABLE `pedidos` (
  `idPedido` INT AUTO_INCREMENT,
  `data` DATETIME NOT NULL DEFAULT current_timestamp(),
  `nomeCliente` VARCHAR(50) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `cep` VARCHAR(10) NOT NULL,
  `logradouro` VARCHAR(150) NOT NULL,
  `numero` INT(6) NOT NULL,
  `complemento` VARCHAR(25),
  `bairro` VARCHAR(150) NOT NULL,
  `cidade` VARCHAR(30) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,  
  `telefone` VARCHAR(11) NOT NULL,
  `idProduto` INT NOT NULL,
  `categoria` VARCHAR(25) NOT NULL,
  `descricao` VARCHAR(150) NOT NULL,
  `quantidade` VARCHAR(3) NOT NULL,
  `observacao` VARCHAR(200),
  PRIMARY KEY (`idPedido`),
  CONSTRAINT fkProdPedido FOREIGN KEY (idProduto) REFERENCES produtos (idProduto)
) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8 DEFAULT COLLATE=utf8_general_ci;


-- Inserindo dados do pedido (aba Nossos Produtos) na tabela `pedidos`
INSERT INTO `pedidos`
VALUES (NULL, '2020-11-28 15:36:41', 'Ana Maria', '111.222.333-99', '05.333.000', 'Rua Amaro Lins', '277','ap 89','Centro','São Paulo','SP','1122222222', 1, 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Carlos Eduardo', '999.888.777-01', '29.000-33', 'Av Ricardo Swatz','1944',NULL,'Ipiranga','São Paulo','SP', '11988887777', 8, 'microondas', 'Microondas Electrolux 20 Litros', '1', NULL),
(NULL, '2020-11-28 15:36:41', 'José', '547.222.333-55', '00.000.000', 'Rua Amaro Lins', '277','ap 89','Centro','São Paulo','SP','1122222222', 1, 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Aline', '654.222.333-57', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 4, 'fogão', 'Fogão 5 Bocas Brastemp Acendimento Automático', '2', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Elisângela', '230.222.333-03', '00.000.000', 'Rua Exemplo', '100','ap 55','Centro','São Paulo','SP','1122222222', 12, 'lavalouca', 'Lava-Louças 18 Serviços Brastemp', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Ricardo', '634.222.333-57', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Gilberto', '349.222.333-56', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '4', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Andressa', '697.222.333-13', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 4, 'fogão', 'Fogão 5 Bocas Brastemp Acendimento Automático', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Patricia', '111.222.333-49', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 1, 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Samuel', '394.222.333-94', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '3', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Fernanda', '497.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 1, 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '2', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Zélia', '111.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 1, 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Carolina', '974.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Amaro', '302.222.333-67', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Paulo', '430.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '2', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'José Carlos', '294.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 4, 'fogão', 'Fogão 5 Bocas Brastemp Acendimento Automático', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Betina', '247.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 1, 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Laís', '111.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 1, 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Hugo', '341.222.333-04', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Ana Lucia', '341.222.333-04', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Luis', '354.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 1, 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '2', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Denis', '281.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 1, 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Wanessa', '364.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '1', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Maria Julia', '237.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '2', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Oswaldo', '229.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 4, 'fogão', 'Fogão 5 Bocas Brastemp Acendimento Automático', '2', 'Entregar após 18h'),
(NULL, '2020-11-28 15:36:41', 'Tadeu', '251.222.333-99', '00.000.000', 'Rua Exemplo', '100','55','Centro','São Paulo','SP','1122222222', 8, 'microondas', 'Microondas Electrolux 20 Litros', '1', 'Entregar após 18h');


-- Exibindo informações dos pedidos
SELECT pedidos.idPedido,
produtos.descricao AS Produto,
pedidos.quantidade AS Quantidade,
produtos.precoFinal * pedidos.quantidade AS ValorDaVenda
FROM produtos INNER JOIN pedidos
ON produtos.idProduto = pedidos.idProduto
ORDER BY pedidos.idPedido;

-- Exibindo o total de vendas de cada categoria
SELECT pedidos.categoria,COUNT(*) AS TotalVendido
FROM pedidos
INNER JOIN produtos 
ON produtos.idProduto = pedidos.idProduto 
GROUP BY pedidos.categoria;
