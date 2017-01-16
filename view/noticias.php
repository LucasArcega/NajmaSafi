<?php
include('../model/Background.php');
session_start();
if(!isset($_SESSION['usuario']) && $_SESSION['logado']!=true ){

    header("Location: ../Home/");
}

function logOut(){
    session_destroy();
}
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
                <li> <a class='page-scroll' href='index.php'>Home</a>
                </li><li><a class='pagina-atual page-scroll' href='#top'>Notícias</a> </li>
                <li> <a class='page-scroll' href='quemSomos.php'>Quem Somos</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <ul class="text-center inverse-dropdown dropdown-menu">
                        <li><a href="#">Alterar Dados</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../controller/logoff.php">Sair</a></li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
    <div class="row">

        <div id="top" class="jumbotron conserta-float header header-index">

            <br><br>
            <form class="form-imagem col-sm-4 col-sm-offset-4" enctype="multipart/form-data" id="frmBackground" action="">

                <div class="form-group center-block ">
                    <h3 >Alterar imagem</h3>
                    <input id="alterarImagem" name="imagem"type="file" required accept="image/*"value="Alterar Imagem" class="btn-alterar form-control btn-default btn">
                </div>

                <div class="form-group center-block">
                    <input type="hidden" name='pagina' value="noticias" class="form-control">
                </div>

                <div class="form-group center-block">
                    <input type="submit" value="Salvar" class="btn form-control btn-success">
                </div>

            </form>
            
        </div>

        <div id="posts"  class= " col-xs-12 col-md-offset-3 col-md-6">

             
            <div ng-repeat="postagem in dados" class="post">

                <div class ="titulo-postagem">
                    <h2> {{ postagem.tituloPostagem }} </h2>
                    <button ng-click=" setPostagemProp('codigo',postagem.codigoPostagem); ModalDeleteOpen(); " class='excluir btn'href='#'> <i class='fa fa-remove'></i> </button>
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

                <div class="form-group text-right">
                    <button ng-click="ModalEditOpen('md',''); setEditar(postagem);" class="btn btn-warning">Editar</button>
                </div>

                <hr>
            </div>
            <button onclick="$('#modal-postagem').modal('show');" class="btn btn-lg btn-add btn-primary">+</button>
        </div>


    </div>
</div>


<!-- Templates _-------------------------------------------->


<div id="modal-postagem" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3>Nova Postagem <button type="button" class="close" data-dismiss="modal">&times;</button></h3>
            </div>

            <div class= "col-xs-12  modal-body">

                <div class="postagem">

                    <h2 class="titulo-postagem"></h2>
                    <form id="frmPostagem" method="post" action=''>

                        <div class="form-group">
                            <input required type="text" name='tituloPostagem' class="form-control" placeholder="Título*">
                        </div>
                        <div class="form-group">
                            <textarea required name='conteudoPostagem' placeholder="Escreva sua postagem aqui*" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">

                            <table class="col-xs-12">
                                <tr>
                                    <td style="width: 12%;">
                                        <i class="fa form-group fa-3x fa-facebook-square"></i>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name='facebookPostagem' class="form-control" placeholder="Associar link do Facebook">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa form-group fa-3x fa-youtube-square"> </i>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name='youtubePostagem' class=" form-control" placeholder="Associar link do YouTube">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="enviar" value="Enviar" class="from-control btn-block btn btn-primary" >
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>





<script type="text/ng-template" id="modalMessage.html">
    <div class="modal-header">
        <h3 class="modal-title">Mensagem do sistema:</h3>

    </div>

    <div class="modal-body">
        <h3>{{message}}</h3>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default" type="button" ng-click="closeModal()" >Ok</button>

    </div>
</script>
<!---=---------                         Delete Modal                   ------------>
<script type="text/ng-template" id="modalDelete.html">
    <div class="modal-content">

        <div class="modal-header">
            <h3 class="modal-title" id="modal-title">Confirmar exclusão</h3>

        </div>

        <div class="modal-body" id="modal-body">
            <h3>Essa postagem será deletada permanentemente, deseja prosseguir?</h3>
        </div>
        <div class="modal-footer">

            <button class="btn btn-default" type="button" ng-click="closeModal()" >Cancelar</button>
            <button class="btn btn-danger" type="button" ng-click="deletePost()">Deletar</button>

        </div>

    </div>
</script>

<!---=-------------------------------------------------------------------------------------------------->


<!---=---------                         Edit Modal                   ------------>
<script type="text/ng-template" id="modalForm.html">
    <div class="modal-header">
        <h3 class="modal-title">Editar postagem</h3>

    </div>

    <div class="modal-body">
        <form id="frmEditarPostagem" method="post" action=''>

            <div class="form-group">
                <input required type="text" ng-model='editar.tituloPostagem' class="form-control" placeholder="Título*">
            </div>
            <div class="form-group">
                <textarea required ng-model='editar.conteudoPostagem' ng-value="tituloPostagem" placeholder="Escreva sua postagem aqui*" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">

                <table class="col-xs-12">
                    <tr>
                        <td style="width: 12%;">
                            <i class="fa form-group fa-3x fa-facebook-square"></i>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" ng-model='editar.facebookPostagem' class="form-control" placeholder="Associar link do Facebook">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa form-group fa-3x fa-youtube-square"> </i>
                        </td>
                        <td>
                            <div class="form-group ">
                                <input type="text" ng-model='editar.youtubePostagem' class=" form-control" placeholder="Associar link do YouTube">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <div class="modal-footer">

        <button class="btn btn-default" type="button" ng-click="closeModal();" >Cancelar</button>
        <button class="btn btn-success" type="button" ng-click="editarPostagemConfirmado();">Salvar</button>

    </div>
</script>



</body>
</html>

<script type = "text/javascript" src="../scripts/app.js"></script>
<script type="text/javascript">

    function enviarPostagem(titulo, conteudo, facebook, youtube){

        postagem = {  titulo : titulo,
            conteudo : conteudo,
            facebook : facebook,
            youtube : youtube
        };


        $.ajax({

            type: 'post',
            url: '../controller/inserirPostagem.php',
            data: postagem
        }).done(function(data){

            if(data == "veio")
                alert("Postagem realizada com sucesso!");
                $('#modal-postagem').modal('hide');

        });


    }

    $(document).ready(function(){

        $('#frmPostagem').submit(function(e){
            e.preventDefault();
            var titulo = $("input[name = tituloPostagem]").val();
            var conteudo = $("textarea[name = conteudoPostagem]").val();
            var facebook = $("input[name = facebookPostagem]").val();
            var youtube = $("input[name = youtubePostagem]").val();

            enviarPostagem(titulo, conteudo, facebook, youtube);
            return false;

        });





    });



</script>

