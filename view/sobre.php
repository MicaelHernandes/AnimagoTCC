
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/footer.css">
    <style>
        body{
            background-color: #4B0082;

        }
        .sobre{
            margin-top: 15px !important;
            width: 880px;
            height: auto;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            background-color: white;
            border-radius: 25px;
        }
        .sobre h1,h2{
            text-transform: uppercase;
        }
        .sobre p{
            padding: 15px;
        }
    </style>
    <title>Sobre</title>
</head>
<body>
<?php 
include_once('menu_nav.php');
?>
<div class="sobre">
    <h1>Sobre nós</h1>
    <p>
    Somos um grupo de estudantes da Etec formados por cinco membros, tendo como objetivo em nosso TCC ligar ações beneficentes com nosso projeto principal, um E-commerce/Pet Shop voltado à animais domésticos, onde iremos vender utensílios, rações, brinquedos entre outros produtos e serviços, tendo como título “Animago”. 
    </p>
    <h2>Missão</h2>
    <p>Assim como brevemente citado no tópico acima, buscamos promover ações beneficentes, e, nesse projeto, tais ações será doações para Ongs que buscam ajudam animais em situações de rua, abandono e maus tratos, e claro, buscaremos oferecer ótimos serviços ao seu pet. 
    </p>
    <h2>Valores</h2>
    <p>Em nosso grupo, quando citamos “valores” no nosso projeto, nos referimos ao valor moral, que por sua vez abrange muitas coisas, mas dentre muitas coisas queremos dar ênfase à empatia e solidariedade, pois ambas juntas conseguem fazer oposição ao mau que muitos animais sofrem. Fazendo o bem, teremos a felicidade como valor pago pela nossa boa ação. 
    </p>
</div>
<?php 
include_once('footer.php');
?>
</body>
</html>