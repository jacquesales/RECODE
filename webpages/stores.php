<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/main.css">
        <title>Lojas - Full Stack Eletro</title>
    </head>

    <body>

        <!--Menu-->
        <?php
            include('menu.html');
        ?>    
        <!--End Menu-->
       
        <header class="header">
            <h1>Lojas</h1>        
        </header>
        <hr>        
        
        <!--Lojas-->
        <section class="store">
            <div class="address">
                <h4>Rio de Janeiro</h4>
                <p>Avenida Presidente Vargas</p>
                <p>n&ordm; 5000</p>
                <p>10&ordm; andar</p>
                <p>Centro</p>
                <p>(21) 3333-3333</p>
            </div>

            <div class="address">
                <h4>São Paulo</h4>
                <p>Avenida Paulista</p>
                <p>n&ordm; 985</p>
                <p>3&ordm; andar</p>
                <p>Jardins</p>
                <p>(11) 4444-4444</p>
            </div>

            <div class="address">
                <h4>Santa Catarina</h4>
                <p>Rua Major I</p>
                <p>Térreo</p>
                <p>n&ordm; 370</p>                  
                <p>Vila Mariana</p>
                <p>(47) 5555-5555</p>
            </div>
        </section>    

        <!--Rodape-->
        <?php
            include('footer.html');
        ?>  

    </body>
</html>