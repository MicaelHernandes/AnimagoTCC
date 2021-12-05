<?php
include_once('../view/menu_nav.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contato</title>
    <style>
        body {
            background-color: indigo;
        }

        .contato {
            border-radius: 25px;
            margin-top: 50px !important;
            width: 60vw;
            height: auto;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
        }

        .items {
            width: 60%;
            height: 80%;

        }
    </style>
</head>

<body>
    <div class="contato">
        <h1>FALE CONOSCO</h1>
        <p><a href="mailto:animago@etec.com">animago@etec.com</a> | <a href="tel:+5511912345978">(11)91234-5978</a></p>
        <div class="items">
            <form action="" method="post">
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Name" placeholder="" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colFormLabel" placeholder="email@provedor.com" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telefone" class="col-sm-2 col-form-label">Celular</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="telefone" placeholder="(11)99123-1234" required max="15">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-danger">Limpar</button>
            </form>
        </div>
    </div>
    <?php
    include_once('../view/footer.php');
    ?>
    <script>
        /* Máscaras ER */
        function mascara(o, f) {
            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }

        function mtel(v) {
            v = v.replace(/\D/g, ""); 
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); 
            v = v.replace(/(\d)(\d{4})$/, "$1-$2");
            return v;
        }

        function id(el) {
            return document.getElementById(el);
        }
        window.onload = function() {
            id('telefone').onkeyup = function() {
                mascara(this, mtel);
            }
        }
    </script>
</body>

</html>