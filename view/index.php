<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Animago</title>
</head>

<body>
    <?php include_once('../view/menu_nav.php'); ?>
    <section class="home_start">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../view/imagens/banners/4.gif" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../view/imagens/banners/6.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../view/imagens/banners/5.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="home_mid">
        <h1>Produtos em destaque</h1>
        <div class="container my-4">
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="./imagens/loja-items/Ração_Golden_Gatos_Adultos_Castrados_Carne_3110240-2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Ração Seca PremieR Pet</h4>
                                        <p class="card-text">Ração Seca PremieR Pet Golden Gatos Adultos Castrados Frango</p>
                                        <p class="card-text">
                                        <p class="text-success">R$150,00</p>
                                        </p>
                                        <a class="btn btn-light">Comprar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="./imagens/loja-items/19451651.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Ração Pedigree</h4>
                                        <p class="card-text">Ração Pedigree para Cães Filhotes Raças Pequenas 900g</p>
                                        <p class="card-text">
                                        <p class="text-success">R$22,99</p>
                                        </p>
                                        <a class="btn btn-light">Comprar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="./imagens/loja-items/Ração_Golden_Premier_Pet_Seleção_Natural_Frango__Abóbora_e_Alecrim_para_Gatos_Castrados_2426646.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Ração Seca PremieR Pet</h4>
                                        <p class="card-text">Ração Seca PremieR Pet Golden Seleção Natural para Gatos Castrados</p>
                                        <p class="card-text">
                                        <p class="text-success">R$23,31</p>
                                        </p>
                                        <a class="btn btn-light">Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->



                </div>

            </div>
        </div>
    </section>
    <section class="home-moeda">
        <h1>Moedas</h1>
        <p>Suas compras são convertidas em Moedas que você pode trocar por descontos no site!</p>
        <img src="./imagens/sobre a moeda.jpeg" alt="">
        <p><button class="btn btn-primary" style="padding: 15px; margin:10px">Conhecer</button></p>
    </section>
    <section class="footer">
        <div class="footer-item">
            <h1>ANIMAGO INC.</h1>
            <ul style="list-style: none;">
                <li><a href="">Rações</a></li>
                <li><a href="">Doações</a></li>
                <li><a href="">ONGs</a></li>
                <li><a href="">Sobre</a></li>
            </ul>
        </div>
        <div class="footer-item">
            <h3>Contato</h3>
            <p>Telefone: <a href="tel:+551124001234">+55(11)2400-1234</a></p>
            <p>Celular: <a href="tel:+5511996832330">+55(11)91234-5678</a></p>
            <p>Email: <a href="mailto:animagoinc@outlook.com">animagoinc@outlook.com</a></p>
            <p>Endereço: R. Cristóbal Cláudio Elilo, 88 - Parque Cecap, Guarulhos - SP, 07190-065</p>
        </div>
        <div class="footer-item">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14640.642975857001!2d-46.5013502!3d-23.4546656!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedc9be7470ec277c!2sEtec%20de%20Guarulhos!5e0!3m2!1spt-BR!2sbr!4v1635607598149!5m2!1spt-BR!2sbr" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <section class="inc">
        <h1>By: Grupo Animago! Projeto TCC Etec 2021</h1>
    </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>


<!--


<div class="carousel-item">

<div class="row">
    <div class="col-md-4">
        <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 clearfix d-none d-md-block">
        <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 clearfix d-none d-md-block">
        <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.1</p>
                <a class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>
</div>

</div>


<div class="carousel-item">

<div class="row">
    <div class="col-md-4">
        <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 clearfix d-none d-md-block">
        <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 clearfix d-none d-md-block">
        <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 clearfix d-none d-md-block">
        <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>
    
</div>

</div>

-->