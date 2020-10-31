<?php        
    include("../PHP/connect.php");
    
    // Verificando configuração correta dos dados no form
    if (isset($_POST['name']) && isset($_POST['email']) 
    && isset($_POST['subject']) && isset($_POST['message'])) {

        // Armazenando as variáveis globais em variáveis locais
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        
        // Inserindo os dados na tabela nos seus respectivos campos
        $sql_form = "INSERT INTO mensagens (nome, email, assunto, mensagem) 
        VALUES ('$name', '$email', '$subject', '$message')";

        $result = $conn->query($sql_form);

        // Verificando a inserção
        if($result) {
            echo "Mensagem enviada!";
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
        <title>Contato - Full Stack Eletro</title>
    </head>

    <body>

        <!----------MENU SECTION------------>
        <?php
            include('menu.html');
        ?>
        
        <div class="container center">

            <!----------CONTACT SECTION------------>            
            <section class="contact">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="../images/email.png" alt="Email">
                                <p>contato@fullstackeletro.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="../images/whatsapp.png" alt="Whatsapp">
                                <p>(11) 99999-9999</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <!----------FORM SECTION------------>
            <section class="form center">
                <h4 class="tittle">Ou deixe sua mensagem</h4>
                
                <form name="mensagens" action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md form-style">
                            <label>Nome</label>
                            <input class="form-control" name="name" type="text">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 form-style">                    
                            <label>Email</label>
                            <input class="form-control" name="email" type="email">
                        </div>                    

                        <div class="form-group col-md-6 form-style">
                            <label>Assunto</label>
                            <select class="form-control" name="subject" id="options">                
                                <option selected>Escolha..</option>
                                <option value="informacao">Solicitar informação</option>
                                <option value="elogio">Elogio</option>
                                <option value="sugestao">Sugestão</option>
                                <option value="reclamacao">Reclamação</option>
                                <option value="outro">Outro</option>
                            </select>               
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md form-style">	
                            <label for="exampleFormControlTextarea1">Mensagem</label>
                            <textarea class="form-control" name="message" type="text" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                    </div>

                    <div>
                        <button class="btn-standard" type="submit" name="enviar">Enviar</button>
                    </div>                   
                </form>
            </section>   

            <br><br>

            <!-----Exibição das mensagens------>
            <section class="show">
                <?php
                    $sql_form = "SELECT * FROM mensagens";
                    $result = $conn->query($sql_form);

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "Data: ".$row['data']."<br/>".
                                    "Nome: ".$row['nome']."<br/>".
                                    "Email: ".$row['email']."<br/>".
                                    "Assunto: ".$row['assunto']."<br/>".
                                    "Mensagem: ".$row['mensagem']."<br/><br/>";
                        }
                    } else {
                        echo "Nenhuma mensagem ainda...";
                    }                        
                ?>
            </section>

            <!----------FOOTER SECTION---------->
            <?php
                include('footer.html');
            ?>

        </div>   

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>