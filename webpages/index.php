<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Full Stack Eletro</title>
    </head>

    <body>  
        <!----------MENU SECTION------------>
        <?php
            include('menu.html');
        ?>

        <!----------MAIN SECTION------------>                
        <main class="center">
            <div class="jumbotron">
                <h2 class="display-5">Seja bem vindo(a)!</h2>
                <div class="lead">           
                    <p>
                    Seu novo marketplace pra trazer mais praticidade e qualidade a sua casa. 
                    O melhor do eletro está aqui!</p>
                </div>
                <hr class="my-4">
                <p>Em breve teremos móveis artesanais da instituição Mães da Terra</p>
                <button class="btn-standard" type="button" href="#">
                Saiba mais
                </button>
            </div>
        </main>      

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