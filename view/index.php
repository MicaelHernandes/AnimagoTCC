<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Animago</title>
</head>

<body>
    <nav class="menu">
        <div class="title">
            <img src="./imagens/logo.jpeg" alt="logo animago">
        </div>
        <div class="items-center">
            <ul>
                <li ><a href="" id="active">HOME</a></li>
                <li ><a href="">SHOP</a></li>
                <li ><a href="">PROGRAMA DE PONTOS</a></li>
                <li ><a href="">SOBRE</a></li>
                <li ><a href="">FORUM</a></li>
                <li ><a href="">CONTATO</a></li>
            </ul>
        </div>
        <div class="user-area">
            <button type="button" class="btn btn-alert m-1">
                <img src="./imagens/alert.png" alt=""><span class="badge badge-light">4</span>
            </button>
            <button type="button" class="btn btn-alert m-1">
                <img src="./imagens/shop.png" alt=""><span class="badge badge-light">4</span>
            </button>
            <button type="button" class="btn btn-alert m-1">
                <img src="./imagens/user.png" alt=""><span class="badge badge-light">Teste</span>
            </button>

        </div>
    </nav>
    <section class="home_start">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Primeiro Slide" alt="Primeiro Slide [800x400]" src="./imagens/banners/1.png" data-holder-rendered="true">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-success">Bem vindo a <span class="text-danger">Animago</span></h1>
                        <p>Aqui você encontrara tudo para seu Pet!</p>
                        <p><button class="btn btn-primary">Conhecer</button></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Segundo Slide" alt="Segundo Slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17cd10023de%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17cd10023de%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22226.53125%22%20y%3D%22217.7%22%3ESegundo%20Slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Título do segundo slide</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Terceiro Slide" alt="Terceiro Slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17cd10023df%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17cd10023df%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22238.453125%22%20y%3D%22217.7%22%3ETerceiro%20Slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Título do terceiro slide</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>

            </a>
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
                                        <p class="card-text"><p class="text-success">R$150,00</p></p>
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
                                        <p class="card-text"><p class="text-success">R$22,99</p></p>
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
                                        <p class="card-text"><p class="text-success">R$23,31</p></p>
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
        <img src="./imagens/sobre a moeda.jpeg" alt="">
    </section>
    <section class="footer">
        
        
    </section>
</body>

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