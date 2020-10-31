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
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Produtos - Full Stack Eletro</title>
    </head>

    <body>
        <!----------MENU SECTION------------>
        <?php
            include('menu.html');
        ?>

        
        <div class="container">

            <!---------CATEGORIES SECTION-------->
            <section class="categories center">
                <h5 class="tittle">Categorias</h5>
                <div class="space">
                    <button class="btn btn-outline-info" onclick="show_all()">Todos</button>
                    <button class="btn btn-outline-info" onclick="show_category('microondas')">Microondas</button>
                    <button class="btn btn-outline-info" onclick="show_category('geladeira')">Geladeiras</button>
                    <button class="btn btn-outline-info" onclick="show_category('lavaroupa')">Lava-roupas</button>
                    <button class="btn btn-outline-info" onclick="show_category('fogão')">Fogões</button>
                    <button class="btn btn-outline-info" onclick="show_category('lavalouca')">Lava-louças</button>
                </div>
            </section>


            <!---------PRODUCTS SECTION-------->
            <section class="products center">

                <?php
                // Consultando e reinderizando os dados já armazenados no banco de dados
                $sql_produtos = "SELECT * FROM produtos";
                $result = $conn->query($sql_produtos);

                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {                    
                ?>
                
                <div class="box-product" id="<?php echo $row['categoria'];?>">
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


            <!---------FORM SECTION-------->
            <section class="form center">
                <h4 class="tittle">Registre seu pedido</h4>

                <form name="pedidos" action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md form-style">
                            <label>Nome</label>
                            <input class="form-control" name="name" type="text" required>
                        </div>                        
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 form-style">                           
                            <label>Endereço</label>
                            <input class="form-control" name="address" type="text" placeholder="Ex.: Rua Exemplo, 94 ap 61 - Vl Anastacio" required>
                        </div>

                        <div class="form-group col-md-3 form-style">
                            <label>CEP</label>
                            <input class="form-control" name="cep" type="text" placeholder="00.000-000" cep-mask="00.000-000" maxlength="10" required>
                        </div>

                        <div class="form-group col-md-3 form-style">
                            <label>Telefone</label>
                            <input class="form-control" name="phone" type="number" placeholder="(11) 99999-9999" required>
                        </div>
                    </div>  
                             
                    <div class="form-row">
                        <div class="form-group col-md-3 form-style">
                            <label>Categoria</label>
                            <select class="form-control" name="category" id="options">
                                <option selected>Escolha..</option>
                                <option value="geladeira">Geladeira</option>
                                <option value="fogao">Fogão</option>
                                <option value="microondas">Microondas</option>
                                <option value="lavaroupa">Lavadora de roupas</option>
                                <option value="lavalouca">Lava-louça</option>
                            </select>
                        </div>

                        <div class="form-group col-md-8 form-style">
                            <label>Descrição</label>
                            <input class="form-control" name="description" type="text" placeholder="Microondas Electrolux 20 Litros" required>
                        </div>

                        <div class="form-group col-md-1 form-style">
                            <label>Quantidade</label>
                            <input class="form-control" name="quant" type="number" required>
                        </div> 
                    </div>    

                    <div class="form-row">
                        <div class="form-group col-md form-style">
                            <label for="exampleFormControlTextarea1">Observações</label>
                            <textarea class="form-control" name="observ" type="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                    <div>
                        <button class="btn-standard" type="submit" name="enviar">Enviar</button>
                    </div>
                </form>  
            </section>
        

            <!-----Exibição dos pedidos------>
            <section class="show">
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

            <!----------FOOTER SECTION---------->
            <?php
                include('footer.html');
            ?>
            
        </div>  

        <script src="../scripts/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>        
    </body>
</html>