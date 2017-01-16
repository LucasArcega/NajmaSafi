<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 01/10/2016
 * Time: 02:16
 */

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova postagem - Najma Safi</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilo.css"/>

    <script type = "text/javascript" src="../scripts/jquery.js"></script>
    <script type = "text/javascript" src="../scripts/bootstrap.min.js"></script>
    <script type = "text/javascript" src="../scripts/jquery.easing.1.3.min.js"></script>
    <script type = "text/javascript" src="../scripts/navbar.js"></script>


</head>


<body>

<script>
    // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
    $(document).ready(function(){

        $('.dropdown').on('show.bs.dropdown', function(e){
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
        });

        // ADD SLIDEUP ANIMATION TO DROPDOWN //
        $('.dropdown').on('hide.bs.dropdown', function(e){
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
        });
    });
</script>


<div class="container-fluid">

    <div class="row">




        <nav class="navbar navbar-inverse">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarLogado" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Najma Safi</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarLogado">
                    <ul class="nav navbar-nav">


                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opções <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Nova Postagem</a></li>
                                <li><a href="#">Configurações do sistema</a></li>
                                <li><a href="#">Configurações de contatos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-right navbar-nav">
                        <li class="active"> <a class='page-scroll' href='/index.php'>Home</a>
                        </li><li><a class='page-scroll' href='/view/contato.html'>Contato </a> </li>
                        <li> <a class='page-scroll' href='#contato'>Quem Somos</a> </li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>




     <!--   <div class="sidebar col-lg-2 col-sm-3 col-xs-12">
            <ul>
                <li><a href="#"><i class="fa fa-plus"></i> Nova postagem</a></li>
                <li><a href="#"><i class="fa fa-file-text"> </i> Postagens</a></li>
                <li><a href="#"><i class="fa fa-gear"></i>  Configurações</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Perfis</a></li>
            </ul>
        </div>
    -->
        <div class=" col-xs-12 col-sm-offset-3 col-sm-9 col-lg-offset-2  col-lg-10  configuracao">

            <h1>Configurações</h1>
            <hr>

            <br>
            <h2>Contato</h2>

            <form class="form-contato" action="">
                <br>
                <br>
                <div class="col-xs-12 subtitulos">
                    <h4><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;&nbsp;Facebook</h4>
                    <br>
                </div>

                <div class="form-group col-xs-12 col-sm-8">
                    <label>Link para o Facebook</label>
                    <input class="form-control" type="text" value="https://www.facebook.com/escolanajmasafi/?fref=ts">
                </div>

                <div class="form-group col-xs-12 col-sm-8">
                    <label>Texto referente ao link</label>
                    <input class="form-control" type="text" value="Najma Safi - Escola de Danças">
                    <br>
                    <br>

                </div>

                <br>
                <br>

                <div class="col-xs-12 subtitulos">
                    <h4><i class="fa fa-youtube-square "></i>&nbsp;&nbsp;&nbsp;Youtube</h4>
                    <br>
                </div>

                <div class="form-group col-xs-12 col-sm-8">
                    <label>Link para o Youtube</label>
                    <input class="form-control" type="text" value="http://asdasdasdasd">
                </div>

                <div class="form-group col-xs-12 col-sm-8">
                    <label>Texto referente ao link</label>
                    <input class="form-control" type="text" value="Escola Najma Safi">
                </div>


                <div class="col-xs-12 subtitulos">
                    <br>
                    <br>
                    <h4><i class="fa fa-phone "></i>&nbsp;&nbsp;&nbsp;Telefones</h4>
                    <br>
                </div>

            </form>

        </div>


    </div>

</div>




</body>
</html>