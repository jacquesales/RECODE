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
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/main.css">
        <title>Contato - Full Stack Eletro</title>
    </head>

    <body>

        <!--Menu-->
        <?php
            include('menu.html');
        ?>    
        <!--End Menu-->

        <header class="header">
            <h1>Contato</h1>
        </header>
        <hr>
        
        <!--Contatos-->
        <section class="contact">
            <div class="type-contact">
                <img src="../images/email.png" alt="Email">
                <p>contato@fullstackeletro.com</p>
            </div>

            <div class="type-contact">
                <img src="../images/whatsapp.png" alt="Whatsapp">
                
                <p>(11) 99999-9999</p>
            </div>           
        </section>

        <div class="msg">
            <h4>Deixe sua mensagem</h4>
        </div>

        <!--Formulário de mensagens-->
        <form name="mensagens" class="form" action="" method="post">
            <div class="form-label">
                <label>Nome *</label>
                <input name="name" type="text" required >
            </div>

            <div class="form-label">
                <label>Email *</label>
                <input name="email" type="email" required >
            </div>

            <div class="form-label">
                <label>Assunto *</label>
                <select name="subject" required id="options">                
                    <option value=""></option>
                    <option value="informacao">Solicitar informação</option>
                    <option value="elogio">Elogio</option>
                    <option value="sugestao">Sugestão</option>
                    <option value="reclamacao">Reclamação</option>
                    <option value="outro">Outro</option>
                </select>               
            </div>

            <div class="form-label">	
                <label>Mensagem *</label>
                <textarea name="message" type="text" required  maxlength="500"></textarea>
            </div>

            <div>
                <button class="btn-enviar" type="submit" name="enviar">Enviar</button>
            </div>
        </form>

        <br><br><br><br>

        <!--Exibindo as mensagens-->
        <section class="contact">
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


        <!--Rodape-->
        <?php
            include('footer.html');
        ?>

    </body>
</html>