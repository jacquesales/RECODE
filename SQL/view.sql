/* Criando o Banco de Dados 'fseletro' */
CREATE DATABASE  IF NOT EXISTS `fseletro`;


/* Criando tabela 'produtos' e seus atributos */
CREATE TABLE `produtos` (
  `idproduto` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `preco_anterior` decimal(8,2) DEFAULT NULL,
  `preco_final` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
);


/* Inserindo os valores na ordem correspondente aos atributos */
INSERT INTO `produtos` 
VALUES (23,'geladeira','images/geladeira-brastemp.png','Geladeira Frost Free Brastemp Inverse 540 litros',8389.99,7019.99),
(24,'geladeira','images/geladeira-electrolux.png','Geladeira Frost Free Electrolux Top Freezer 431 litros',6849.99,5129.99),
(25,'geladeira','images/geladeira-bottom.png','Geladeira Frost Free Bottom Inverse 454 litros',7989.99,6609.99),
(26,'fogão','images/fogao-brastemp.png','Fogão 5 Bocas Brastemp Acendimento Automático',4599.99,3719.99),
(27,'fogão','images/fogao-brastemp2.png','Fogão 5 Bocas Brastemp Turbo Chama Timer',5199.99,4479.99),
(28,'microondas','images/microondas-electrolux.png','Microondas Electrolux Tira Odor 20 Litros',1999.99,1729.99),
(29,'microondas','images/microondas-philco.png','Microondas Philco 21 Litros',2959.99,2049.99),
(30,'microondas','images/microondas-electrolux2.png','Microondas Electrolux 20 Litros',2759.99,2499.99),
(31,'lavaroupa','images/maq-lavaeseca-lg.png','Máquina Lava e Seca Roupas 11 Kilos LG',7999.99,6919.99),
(32,'lavaroupa','images/maq-lavar-brastemp.png','Máquina de Lavar Roupas 15 Kilos Brastemp',7839.99,6079.99),
(33,'lavalouca','images/lavaloucas-electrolux.png','Lava-Louças Branca 14 Serviços Electrolux',7399.99,6509.99),
(34,'lavalouca','images/lavaloucas-brastemp.png','Lava-Louças 18 Serviços Brastemp',8899.99,7609.99);



/* Criando tabela 'pedidos' e seus atributos */
CREATE TABLE `pedidos` (
  `idpedido` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(50) NOT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `produto` varchar(150) NOT NULL,
  `valor_unitario` decimal(6,2) NOT NULL,
  `quantidade` varchar(3) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idpedido`)
);


/* Listando produtos que sejam da categoria geladeira */
SELECT *
FROM fseletro.produtos
WHERE categoria = 'geladeira';

/* Listando produtos que contenham preco entre 2000 a 4000 mil */
SELECT *
FROM fseletro.produtos
WHERE preco_final >= 2000 AND preco_final <= 4000;

/* Listando produtos que sejam da marca Brastemp */
SELECT *
FROM fseletro.produtos
WHERE descricao LIKE '%Brastemp%';


-- --------------------------------------------------------


-- Criando a tabela `mensagens`
CREATE TABLE `mensagens` (
  `idmsg` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `nome` varchar(150) NOT NULL,
  `email` varchar(80) NOT NULL,
  `assunto` varchar(25) NOT NULL,
  `mensagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserindo dados do usuario (aba Fale Conosco) na tabela `mensagens`
INSERT INTO `mensagens` (`idmsg`, `data`, `nome`, `email`, `assunto`, `mensagem`) 
VALUES (2, '2020-10-27 10:44:57', 'Maria', 'maria@teste.com', 'informacao', 'OlÃ¡, mensagem teste'),
(3, '2020-10-27 10:46:07', 'JoÃ£o', 'jsd.gomes@exemplo.com.br', 'sugestao', 'Ampliar a gama de produtos'),
(17, '2020-10-27 10:55:46', 'Laura', 'laura@exemplo.com', 'elogio', 'Obrigada pelo envio da mercadoria na data prevista');

-- Criando a tabela `pedidos`
CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `nome_cliente` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `quantidade` varchar(3) NOT NULL,
  `observacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserindo dados do pedido (aba Nossos Produtos) na tabela `pedidos`
INSERT INTO `pedidos` (`idpedido`, `data`, `nome_cliente`, `cpf`, `endereco`, `cep`, `telefone`, `categoria`, `descricao`, `quantidade`, `observacao`) 
VALUES (1, '2020-10-27 15:39:49', 'Ana Maria', '111.222.333-99', 'Rua Amaro Lins, 277 apto 89 - Centro', '05.333.000', '1122222222', 'geladeira', 'Geladeira Frost Free Brastemp Inverse 540 litros', '1', 'Entregar apÃ³s 18h'),
(3, '2020-10-27 15:45:25', 'Carlos Eduardo', '999.888.777-01', 'Av Ricardo Swatz, 1944 - Ipiranga', '29.000-33', '11988887777', 'microondas', 'Microondas Electrolux 20 Litros', '1', '');