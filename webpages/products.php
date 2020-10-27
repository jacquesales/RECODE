<?php        
    include("../PHP/connect.php");
    
    // Verificando configuração correta dos dados no form
    if (isset($_POST['name']) && isset($_POST['cpf']) 
    && isset($_POST['address']) && isset($_POST['cep'])
    && isset($_POST['phone']) && isset($_POST['category'])
    && isset($_POST['description']) && isset($_POST['quant'])
    && isset($_POST['observ'])) {

        // Armazenando as variáveis globais em variáveis locais
        $name = $_POST["name"];
        $cpf = $_POST["cpf"];
        $addr = $_POST["address"];
        $cep = $_POST["cep"];
        $phone = $_POST["phone"];
        $categ = $_POST["category"];
        $descr = $_POST["description"];
        $quant = $_POST["quant"];
        $obs = $_POST["observ"];
        
        // Inserindo os dados na tabela nos seus respectivos campos
        $sql_pedidos = "INSERT INTO pedidos (nome_cliente, cpf, endereco, 
        cep, telefone, categoria, descricao, quantidade, observacao) 
        VALUES ('$name', '$cpf', '$addr', '$cep', '$phone', '$categ',
        '$descr', '$quant', '$obs')";

        $result = $conn->query($sql_pedidos);

        // Verificando a inserção
        if($result) {
            echo "Pedido enviado!";
        } else {
            echo "Houve um erro ao enviar...";
        }   
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/main.css">
        <title>Produtos - Full Stack Eletro</title>
    </head>

    <body>

        <!--Menu-->
        <?php
            include('menu.html');
        ?>


        <header class="header">
            <h1>Produtos</h1>
        </header>
        <hr>


        <!--Categorias-->
        <section class="categories">
            <h3>Categorias</h3>
            <ul>
                <li onclick="show_all()">Todos (12)</li>
                <li onclick="show_category('geladeira')">Geladeiras (3)</li>
                <li onclick="show_category('fogao')">Fogões (2)</li>
                <li onclick="show_category('microondas')">Microondas (3)</li>
                <li onclick="show_category('lavaroupa')">Lavadora de roupas (2)</li>
                <li onclick="show_category('lavalouca')">Lava-louças (2)<li></li>                      
            </ul>
        </section>

        
        <!--Produtos Cadastrados-->
        <section class="products">

            <?php
            // Consultando e reinderizando os dados já armazenados no banco de dados
            $sql_produtos = "SELECT * FROM produtos";
            $result = $conn->query($sql_produtos);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {                    
            ?>

                    <div class="box-product" id="<?php echo $row['categoria'];?>" style="display: block;">
                    <img onmouseover="mouseOver(this)" onmouseout="mouseOut(this)" src="<?php echo $row['imagem'];?>">
                    <br>
                    <p class="description"><?php echo $row['descricao'];?></p>
                    <hr>
                    <p class="previousvalue"><?php echo $row['preco_anterior'];?></p>
                    <p class="currentvalue"><?php echo $row['preco_final'];?></p>
                </div>

            <?php
                }
            } else {
                echo "Nenhum produto cadastrado. Tente outra vez.";
            }        
            ?>
        </section>

        <div class="msg">
            <h4>Registre seu pedido</h4>
        </div>

        <!--Formulário de pedidos-->
        <form name="pedidos" class="form" action="" method="post">
            <div class=form-label>
                <label>Nome *</label>
                <input name="name" type="text" required >
            </div>

            <div class="form-label">
                <label>CPF *</label>
                <input name="cpf" type="text" placeholder="000.000.000-00" cpf-mask="000.000.000-00" maxlength="14" required >
            </div>

            <div class="form-label">
                <label>Endereço completo *</label>
                <input name="address" type="text" placeholder="Ex.: Rua Exemplo, 94 ap 61 - Vl Anastacio" required >
            </div>

            <div class="form-label">
                <label>CEP *</label>
                <input name="cep" type="text" placeholder="00.000-000" cep-mask="00.000-000" maxlength="10" required >
            </div>

            <div class="form-label">
                <label>Telefone *</label>
                <input name="phone" type="number" required >
            </div>

            <div class="form-label">
                <label>Categoria *</label>
                <select name="category" required id="options">                
                    <option value=""></option>
                    <option value="geladeira">Geladeira</option>
                    <option value="fogao">Fogão</option>
                    <option value="microondas">Microondas</option>
                    <option value="lavaroupa">Lavadora de roupas</option>
                    <option value="lavalouca">Lava-louça</option>
                </select>
            </div>

            <div class="form-label">
                <label>Descrição *</label>
                <input name="description" type="text" required >
            </div>

            <div class="form-label">
                <label>Quantidade *</label>
                <input name="quant" type="number" required >
            </div>            

            <div class="form-label obs">	
                <label>Observações</label>
                <textarea name="observ" type="text" maxlength="200"></textarea>
            </div>

            <div>
                <button class="btn-enviar" type="submit" name="enviar">Enviar</button>
            </div>
        </form>

        <!--Exibindo os pedidos-->
        <section class="contact">
            <?php
                $sql_pedidos = "SELECT * FROM pedidos";
                $result = $conn->query($sql_pedidos);

                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo    "ID: ".$row['idpedido']."<br/>".
                                "Data: ".$row['data']."<br/>".
                                "Nome: ".$row['nome_cliente']."<br/>".
                                "CPF: ".$row['cpf']."<br/>".
                                "Endereço: ".$row['endereco']."<br/>".
                                "CEP: ".$row['cep']."<br/>".
                                "Telefone: ".$row['telefone']."<br/>".
                                "Categoria: ".$row['categoria']."<br/>".
                                "Produto: ".$row['descricao']."<br/>".
                                "Quant.: ".$row['quantidade']."<br/>".
                                "Observação: ".$row['observacao']."<br/><br/>";
                    }
                } else {
                    echo "Nenhum pedido ainda...";
                }                        
            ?>
        </section>

        <!--Rodape-->
        <?php
            include('footer.html');
        ?>        

        <script src="../scripts/main.js"></script>        
    </body>
</html>