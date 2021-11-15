<style>
    /*CONFIGURAÇÃO DO MENU NAV*/
.menu{
    width: 100vw;
    height: auto;
    background-color: #f7f7f7;
    display: flex;
    align-content: stretch;
    justify-content: space-evenly;
    flex-wrap: wrap;
    align-items: baseline;
}
#active{
    background-color: white;
    color: black;
}
.title img{
    width: 95px;
}
.user-area{
    display: flex;
    align-items: baseline;
}
.user-area img{
    width: 20px;
}
.user-area img,h1{
    margin-left: 5px;
}
.menu ul{
    display: flex;
    list-style: none;
}
.menu ul li{
    padding: 5px;
}
.menu ul li a{
    text-decoration: none;
    border: 1px solid black;
    color: white;
    background-color: indigo;
    border-radius: 5px;
    padding: 5px;
}

/*FIM DA COFIGURAÇÃO MENU*/
</style>
<nav class="menu">
        <div class="title">
            <a href="../view/index.php"><img src="./imagens/logo.jpeg" alt="logo animago"></a>
        </div>
        <div class="items-center">
            <ul>
                <li ><a href="../view/index.php" id="active">HOME</a></li>
                <li ><a href="../view/shopping.php">SHOP</a></li>
                <li ><a href="">PROGRAMA DE PONTOS</a></li>
                <li ><a href="">SOBRE</a></li>
                <li ><a href="">FORUM</a></li>
                <li ><a href="">CONTATO</a></li>
            </ul>
        </div>
        <?php 
        if(isset($_SESSION['usuario'])){
        ?>
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
        <?php };
        ?>
        <?php 
       if(isset($_SESSION['usuario']) == false){
        ?>
        <div class="user-area">
            <a href="../view/login.php"> <button class="btn btn-success" style="margin-right: 2px;" >Logar</button></a> 
            <button class="btn btn-light btn-sm">Cadastrar-se</button>
            
        </div>
        <?php };
        ?>
        
    </nav>