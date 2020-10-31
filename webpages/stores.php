<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Lojas - Full Stack Eletro</title>
    </head>

    <body>

        <!----------MENU SECTION------------>
        <?php
            include('menu.html');
        ?>
        
        <div class="container-fluid stores-grid">
       
            <!---------STORES SECTION--------> 
            <div id="div1">
                <img class="img-fluid img-thumbnail" src="../images/store.jpg" alt="loja">
            </div>

            <div class="card card-body text-center" id="div2">
                <h4 class="card-header"><strong>São Paulo</strong></h4>
                <p>Avenida Paulista</p>
                <p>n&ordm; 985 - 3&ordm; andar - Jardins</p>
                <p>(11) 4444-4444</p>
            </div>

            <div class="card card-body text-center" id="div3">
                <h4 class="card-header"><strong>Rio de Janeiro</strong></h4>
                <p>Avenida Presidente Vargas</p>
                <p>n&ordm; 5000 - 10&ordm; andar - Centro</p>
                <p>(21) 3333-3333</p>
            </div>

            <div class="card card-body text-center" id="div4">
                <h4 class="card-header"><strong>Santa Catarina</strong></h4>
                <p>Rua Major I</p>
                <p>Térreo - n&ordm; 370 - Vila Mariana</p>                  
                <p>(47) 5555-5555</p>
            </div>

            <div class="card card-body text-center" id="div5">
                <h4 class="card-header"><strong>Belo Horizonte</strong></h4>
                <p>Pç Sete de Setembro</p>
                <p>n&ordm; 48 - 1&ordm; andar - Centro</p>
                <p>(11) 6666-6666</p>
            </div>   
        </div>

            <!----------FOOTER SECTION---------->
            <?php
                include('footer.html');
            ?>        
          
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>