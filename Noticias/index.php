<?php
include('../model/Background.php');
?>

<!DOCTYPE html>
<html ng-app="todoApp" lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - Najma Safi</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilo.css"/>

    <script type = "text/javascript" src="../scripts/jquery.js"></script>
    <script type = "text/javascript" src="../scripts/bootstrap.min.js"></script>
    <script type = "text/javascript" src="../scripts/jquery.easing.1.3.min.js"></script>
    <script type = "text/javascript" src="../scripts/scrolling-nav.js"></script>
    <script type = "text/javascript" src="../scripts/bootbox.min.js"></script>
   <!-- <script type = "text/javascript" src="../scripts/script.js"></script>-->
    <script type = "text/javascript" src="../scripts/angular.min.js"></script>
    <script type = "text/javascript" src="../scripts/backgrounds.js"></script>
    <script type = "text/javascript" src="../scripts/ui-bootstrap-tpls-2.2.0.min.js"></script>
    <script type = "text/javascript" src="../scripts/atalhoLogin.js"></script>

    <script type = "text/javascript" src="../scripts/navbar.js"></script>
</head>
<body  ng-controller="PostagensController as postagens" >
<nav class="navbar navbar-fixed-top navbar-inverse navbar-initial">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class=" navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarLogado" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Najma Safi</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarLogado">
            <ul class="nav navbar-right navbar-nav">
                <li> <a class='page-scroll' href='../Home/'>Home</a>
                </li><li><a class='pagina-atual page-scroll' href='#top'>Notícias</a> </li>
                <li> <a class='page-scroll' href='../QuemSomos/'>Quem Somos</a> </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container-fluid">
    <div class="row">

        <div style=" background-image: url('<?php $background = new Background(); echo $background->GetBackground('backgroundNoticias')[0] ?>'); " id="top" class="jumbotron conserta-float header header-index">

        </div>

        <div id="posts"  class= " col-xs-12 col-md-offset-3 col-md-6">

             
            <div ng-repeat="postagem in dados" class="post">

                <div class ="titulo-postagem">
                    <h2> {{ postagem.tituloPostagem }} </h2>
                    <br/><br/><small>Postado em: {{postagem.dataPostagem}}</small>
                </div>

                <br/>
                <p> {{postagem.conteudoPostagem}} </p>

                <br>
                <br>
                <br>
                <br>
                <br>
               <div ng-show="postagem.facebookPostagem">
                    <a ng-href= "{{postagem.facebookPostagem}}" target="_blank">
                    <i class="fa form-group fa-facebook-square"></i>
                    Veja no facebook</a><br>
                </div>

               <div ng-show="postagem.youtubePostagem">

                   <a ng-href="{{postagem.youtubePostagem}}" target="_blank">
                   <i class="fa form-group fa-youtube-square"> </i>
                   Veja no Youtube</a>

               </div>

                <hr>
            </div>

        </div>

    </div>

</div>

</body>
</html>

<script type = "text/javascript" src="../scripts/app.js"></script>

