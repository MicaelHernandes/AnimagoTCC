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
    <link rel="stylesheet" href="./css/footer.css">
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
    <?php 
    require_once('../view/footer.php');
    ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>

