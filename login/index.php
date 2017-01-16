<?php include('../model/Background.php') ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Najma Safi - Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilo-login.css"/>
    <script type = "text/javascript" src="../scripts/jquery.js"></script>
    <script type = "text/javascript" src="../scripts/bootstrap.min.js"></script>
    <script type = "text/javascript" src="../scripts/bootbox.min.js"></script>
</head>
<script>

    jQuery.fn.center = function (){
        this.css("position","absolute");
        this.css({
            top: '50%',
            left: '50%',
            margin: '-' + (this.height() / 2) + 'px 0 0 -' + (this.width() / 2) + 'px'
        });
        return this;
    };



    function realCenter(){
        if(document.documentElement.clientWidth > 766)
            $('.login-form').center();
        else{
            $('.login-form').css({
                top:'0',
                left:'0',
                margin: 'auto'
            });

        }
    }


    $(document).ready(function() {

        realCenter();

        $(window).resize(function () {
            realCenter();

        });



    });
</script>

<body style="background-image: url('<?php $background = new Background(); echo $background->GetBackground('backgroundHome')[0] ?>'); ">

    <div class="container-fluid ">

        <div class="row">

            <div class ="col-xs-12 col-sm-6 col-md-4 login-form">

                <h2>Bem vindo!</h2>
                <h3>Najma Safi- Escola de danças</h3>
                <br>
                <form id="frmLogin" method="POST">

                    <div class="form-group">
                        <input required type="text" name="usuario" placeholder="Usuário" id="usuario" class="form-control">
                    </div>

                    <div class="form-group">
                        <input required type="password" name="senha" placeholder="Senha" id="senha" class="form-control">
                    </div>

                    <div class="checkbox">
                        <label class="checkbox-inline"><input type="checkbox" > Lembre-se de mim</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control">Entrar</button>
                    </div>
                </form>

            </div>




        </div>

    </div>

    <script>

        $(document).ready(function(){

            $("#frmLogin").submit(function(e){

                e.preventDefault();
                $.ajax({

                    url:"../controller/login.php",
                    data: {'usuario': $('#usuario').val(),
                        'senha': $('#senha').val()
                    },
                    method: 'POST',
                    success: function(response){
                        var retorno = response;
                        retorno = retorno.replace(/\n/g,'').replace(/\r/g,'').replace(/^\s+|\s+$/g,"");
                        if(retorno == "true"){
                            window.location.href = "../view/index.php";
                        }
                        else{
                            bootbox.alert("Usuário ou senha inválido(s)!");
                        }

                    }
                });

            });

        });

    </script>

</body>




</html>