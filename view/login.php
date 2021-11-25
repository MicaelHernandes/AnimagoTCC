<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Animago</title>
</head>

<body>
    <div class="center">
        <div class="left">
        </div>
        <div class="rigth">
            <h1 class="text-success">ANIMAGO</h1>
            <h2>FAÇA O LOGIN OU SE REGISTRE-SE</h2>
            <?php if(isset($_SESSION['nao-autenticado'])){?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <div>
                    Login ou senha Invalidos!
                </div>
            </div>
            <?php };
            unset($_SESSION['nao-autenticado']);
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Email:</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" style="width: 500px; height:40px;" required>
                    </div>
                    <label for="">Senha</label>
                    <div class="input-group">
                        <input type="password" class="form-control" style="width: 500px; height:40px;">
                    </div>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Entrar</button>
                <button class="btn btn-outline-primary" type="submit">Registra-se</button>
                <br><br>
                <a href="../view/index.php" style="text-decoration: none; color: black;">Voltar</a>
            </form>
        </div>
    </div>
</body>

</html>