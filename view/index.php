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
<html style="height:100%" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Najma Safi</title>

    <script type = "text/javascript" src="../scripts/jquery.js"></script>
    <script type = "text/javascript" src="../scripts/bootstrap.min.js"></script>
    <script type = "text/javascript" src="../scripts/jquery.easing.1.3.min.js"></script>
    <script type = "text/javascript" src="../scripts/navbar.js"></script>
    <script type = "text/javascript" src="../scripts/scrolling-nav.js"></script>
    <script type = "text/javascript" src="../scripts/backgrounds.js"></script>
    <script type = "text/javascript" src="../scripts/bootbox.min.js"></script>
    <script type = "text/javascript" src="../scripts/fileinput.min.js"></script>

    <script type = "text/javascript" src="../scripts/locales/pt-BR.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <link rel="stylesheet" href="../css/fileinput.min.css">

</head>

<body style="background-color: white" onload="initialize()">
<nav data-spy='affix' class='affix navbar-initial navbar navbar-fixed-top navbar-inverse'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-controls='navbar'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>

      <div class = 'navbar-header'>
        <a href='' class ='navbar-brand'>Najma Safi</a>
      </div>
    </div>

    <div id='navbar' class=' collapse navbar-collapse'>

        <ul class='nav navbar-nav navbar-right'>
            <li> <a class="pagina-atual"  href='#top'>Home</a> </li>
            <li> <a  href='noticias.php'>Notícias</a> </li>
             <li> <a  href='quemSomos.php'>Quem Somos</a> </li>
             <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                  <ul class="text-center inverse-dropdown dropdown-menu">
                      <li><a data-toggle="modal" data-target="#editar-dados-perfil-modal" href="#">Alterar Dados do Perfil</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="../controller/logoff.php">Sair</a></li>
                  </ul>
              </li>
          </ul>
    </div>
  </div>
</nav>
<div id="top" style = "background-image: url('<?php $background = new Background(); echo $background->GetBackground('backgroundHome')[0] ?>'); " class = "header-home">

  <form class="form-imagem col-sm-4 col-sm-offset-4" enctype="multipart/form-data" id="frmBackground" action="">

    <div class="form-group center-block ">
      <h3 >Alterar imagem</h3>
      <input id="alterarImagem" name="imagem" type="file" required accept="image/*" value="" class="btn-alterar form-control  btn">
    </div>

    <div class="form-group center-block">
      <input type="hidden" name='pagina' value="contato" class="form-control">
    </div>

    <div class="form-group center-block">
      <input type="submit" value="Salvar" class="btn form-control btn-success">
    </div>

  </form>

    <div class="text-center page-top">
        <i><img class="logo" src="../imagens/logo/logo.png" alt="Najma Safi"> </i>
        <h1>Najma Safi</h1>

        <h2>Escola de danças</h2>

        <br>

        <a class="page-scroll" href="#sobre"><i class="fa fa-angle-double-down"></i></a>


    </div>
</div>
<div  class="container-fluid">
      <div class="row">


          <section id="sobre" class="sobre col-xs-12">
              <div class="col-xs-12 col-sm-offset-1 col-sm-10">
                    <br>
                    <br>
                    <h1>Sobre nós</h1>
                    <br>

                    <div class="col-xs-12 col-sm-6">
                        <p class="textoSobre">

                        </p>


                        <div id="editar-sobre-wrapper" class="col-xs-12">

                            <button data-toggle="modal" data-target="#editar-sobre-modal" class="btn btn-warning">Editar</button>

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6">

                        <img src="" class="imagemSobre img-responsive" alt="">

                        <div id="editar-sobre-imagem-wrapper" class="col-xs-12">
                            <button data-toggle="modal" data-target="#editar-sobre-imagem-modal" class="btn btn-warning">Editar</button>
                        </div>

                    </div>

                </div>

          </section>

    <section id="contato" class="col-xs-12">

        <div class="contato col-md-10 col-md-offset-1">
            <div class="col-xs-12 col-md-6">
                <h2>Redes Sociais</h2>

                <table class="redes-sociais">
                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td><i class="fa fa-facebook-square fa-2x"> &nbsp;&nbsp;</i></td>
                        <td><a href="" id="facebook" target="_blank"></a> </td>
                    </tr>

                    <tr>

                        <td>&nbsp;</td>

                    </tr>

                    <tr>

                        <td><i class="fa fa-youtube-square fa-2x">&nbsp;&nbsp; </i></td>

                        <td><a href="" id="youtube" target="_blank"></a></td>


                    </tr>

                </table>
                <br>
                <h2>Telefones</h2>

                <table class="telefones">

                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>

                    <td><i class="fa fa-2x fa-phone"></i></td>
                        <td id="telefone"><br></td>
                    </tr>

                    <tr>
                    <td>&nbsp;</td>
                    </tr>
                    <tr>
                    <td style="width: 38px;"><i class="fa fa-2x fa-whatsapp"> &nbsp;</i></td>
                    <td id="whatsapp"></td>
                    </tr>

                </table>


                <div id="editar-contato-wrapper" class="col-xs-12 col-sm-4">
                    <br>
                    <br>
                    <div class="form-group">

                        <button data-toggle="modal" data-target="#editar-contato-modal" class="btn btn-warning">Editar</button>

                   </div>
               </div>

            </div>

            <div id="endereco-wrapper" class="col-xs-12 col-md-6">

                <h2>Nosso Endereço</h2>

                <br><br>

                <div id="" class="endereco-wrapper">

                    <p><a id="link-maps" href="#" target="_blank">Veja no google maps</a></p>

                    <div id="map_canvas" style="min-width: 240px; width: 100%; min-height: 400px;" >
            <!---------------------------      Google maps              -->

                    </div>
                </div>

                <div id="editar-endereco-wrapper" class="col-xs-12 col-sm-4">
                    <br>
                    <br>
                    <div class="form-group">
                        <button data-toggle="modal" data-target="#editar-endereco-modal" class="btn btn-warning">Editar</button>
                    </div>
                </div>
            </div>

        </div>

    </section>

  </div>
</div>
<!-- Modal -->
<div id="editar-contato-modal" class="modal fade" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Contatos</h4>
      </div>
      <form class="form-contato" id='frmContatos' action="">
        <div class="modal-body">



          <div class="col-sm-6">
            <div class="col-xs-12 subtitulos">

              <h4><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;&nbsp;Facebook</h4>
              <br>
            </div>

            <div class="form-group col-xs-12">
              <label for="link-facebook">Link para o Facebook</label>
              <input class="form-control" type="text" id="link-facebook" name="linkFacebook" value="">
            </div>

            <div class="form-group col-xs-12">
              <label for="texto-facebook">Texto referente ao link</label>
              <input class="form-control" type="text" id="texto-facebook" name="textoFacebook" value="">
              <br>
              <br>

            </div>


            <div class="col-xs-12 subtitulos">
              <h4><i class="fa fa-phone "></i>&nbsp;&nbsp;&nbsp;Telefones</h4>
              <br>
            </div>

            <div class="form-group col-xs-12">
              <label for="numero-whatsapp">Whatsapp</label>
              <input class="form-control" type="text" id="numero-whatsapp" name="whatsapp" value="">
            </div>

            <div class="form-group col-xs-12">
              <label for="numero-telefone">Fixo</label>
              <input class="form-control" type="text" name="telefone" id="numero-telefone" value="">
            </div>

          </div>

          <div class="col-sm-6">
            <div class="col-xs-12 subtitulos">
              <h4><i class="fa fa-youtube-square "></i>&nbsp;&nbsp;&nbsp;Youtube</h4>
              <br>
            </div>

            <div class="form-group col-xs-12">
              <label for="link-youtube">Link para o Youtube</label>
              <input class="form-control" type="text" id="link-youtube" name="linkYoutube" value="">
            </div>

            <div class="form-group col-xs-12">
              <label for="texto-youtube">Texto referente ao link</label>
              <input class="form-control" type="text" id="texto-youtube" value="" name="textoYoutube">
            </div>

          </div>

        </div>
        <div class="col-xs-12 modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
        <br style="clear:both">
      </form>
    </div>

  </div>
</div>

<div id="editar-endereco-modal" class="modal fade" data-backdrop="static" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Endereço</h4>
            </div>
            <form class="" id='frmPlaceId' action="">
                <div class="modal-body">

                    <div class="col-sm-6 col-sm-offset-3">

                        <div class="form-group col-xs-12">
                            <label for="placeId">Place ID</label>
                            <input name="placeId" id="placeId" class="form-control" placeholder="ChIJw5DI57R6GZURXw9ONzzBWgk">
                        </div>


                        <div class="form-group col-xs-12">
                            <label for="link-maps">Endereço web da localidade no google maps</label>
                            <input name="linkMaps" id="link-maps" class="form-control" placeholder="https://www.google.com.br/maps/...">
                        </div>

                        <div class="form-group col-xs-12">
                            <span>Dica: O Place Id de um endereço pode ser encontrado <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder?hl=pt-br">aqui</a>. </span>
                        </div>

                    </div>


                </div>
                <div class="col-xs-12 modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
                <br style="clear:both">
            </form>
        </div>

    </div>
</div>



<div id="editar-sobre-modal" class="modal fade" data-backdrop="static" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sobre</h4>
      </div>
      <form class="" id='frmSobre' action="">
        <div class="modal-body">

          <div class="form-group col-xs-12">
            <label for="texto-sobre">Sobre</label>
            <textarea rows="10" class="form-control" id="texto-sobre" name="texto-sobre" placeholder='Breve descrição do que se trata a página. (Por "respeito" ao leitor, não ultrapassar dois parágrafos)'></textarea>
          </div>
        </div>
        <div class="col-xs-12 modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
        <br style="clear:both">
      </form>
    </div>

  </div>
</div>

<div id="editar-sobre-imagem-modal" class="modal fade" data-backdrop="static" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Imagem Sobre</h4>
            </div>
            <form class="" id='frmImagemSobre' action="">
                <div class="modal-body">

                    <div class="form-group col-xs-12">
                        <input id="imagem-sobre" name="imagemSobre" accept="image/*" type="file">
                    </div>
                </div>
                <div class="col-xs-12 modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
                <br style="clear:both">
            </form>
        </div>
    </div>
</div>

<div id="editar-dados-perfil-modal" class="modal fade" data-backdrop="static" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Dados do perfil administrador</h4>
            </div>
            <form class="" id='frmDadosPerfil'>
                <div class="modal-body">

                    <div class="form-group col-xs-12">
                        <label for="usuario"><i class="fa fa-user">&nbsp;</i>Usuário</label>
                        <input required class="form-control col-xs-11" id="usuario" type="text" name="usuario" placeholder="Nome de Usuário">
                    </div>

                    <div class="form-group col-xs-12">
                        <label for="email"><i class="fa fa-envelope">&nbsp;</i>E-mail</label>
                        <input class="form-control col-xs-11" type="email" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div>
                        <a data-toggle="modal" data-target="editar-senha-modal" href="#">Alterar senha</a>
                    </div>

                    <br style="clear:both">
                </div>
                <div class="col-xs-12 modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
                <br style="clear:both">
            </form>
        </div>
    </div>
</div>

<section class="col-xs-12" id="footer">

  <br>
  <p class="text-center">&copy; Najma Safi - Escola de dança, 2016 <br> Endereço: Rua Carlos Gomes, 393, Harmonia, Canoas - RS</p>
  <br>

</section>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcezQGT7hh_Xj042UOFiYRgGcRNKOIXKI"></script>

<script type="text/javascript">


  function nl2br(string) {

    return string.replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + '<br>' + '$2');

  }
  function getContatos() {

    $.ajax({

      url: "../controller/listarContatos.php",
      method: 'GET',
      success: function (response) {

        response = JSON.parse(response)[0];

        $('#facebook').attr('href', response.linkFacebookContato).text(response.textoFacebookContato);
        $('#youtube').attr('href', response.linkYoutubeContato).text(response.textoYoutubeContato);

        $('#whatsapp').text(response.whatsappContato);

        $('#telefone').text(response.telefoneContato);

        try {
          $('#link-youtube').val(response.linkYoutubeContato);
          $('#texto-youtube').val(response.textoYoutubeContato);
          $('#numero-whatsapp').val(response.whatsappContato);
          $('#numero-telefone').val(response.telefoneContato);
          $('#link-facebook').val(response.linkFacebookContato);
          $('#texto-facebook').val(response.textoFacebookContato);
        }

        catch (e){

        }
      }

    });


  }

  $(document).ready(function () {

      getContatos();
      getSobre();

      $('#frmDadosPerfil').submit(function (e) {
          e.preventDefault();
          $.ajax({
              url:'../controller/alterarDadosPerfil.php',
              data: $(this).serialize(),
              method: 'POST',
              success: function (response) {
                  if(response == true){

                      bootbox.alert({
                          title:"Mensagem do sistema",
                          message: "Dados alterados com sucesso",
                          callback: function () {
                              location.reload();
                          }
                      });
                  }else{
                      bootbox.alert({
                          title:"Mensagem do sistema",
                          message: "Erro ao alterar o(s) contato(s)! Se essa mensagem persistir, contate o administrador do sistema",
                          callback: function () {
                              location.reload();
                          }
                      });
                  }
              }
          });

      });


      $('#imagem-sobre').fileinput({
          language: "pt-BR",
          allowedFileExtensions: ["jpg", "png", "gif"],
          uploadUrl: '../controller/alterarImagemSobre.php',
          uploadAsync: false
      });

      $('#imagem-sobre').on('filebatchuploadsuccess', function(event, data, previewId, index) {
          $('#editar-sobre-imagem-modal').modal('hide');
          response = data.response;
          bootbox.alert({
              title: "Mensagem do sistema:",
              message: response,
              callback: function () {
                  location.reload();
              }
          });


          console.log(form,response);
      });





      $('#frmContatos').submit(function (e) {

          e.preventDefault();
          $.ajax({

              url:'../controller/alterarContatos.php',
              data: $(this).serialize(),
              method: 'POST',
              success: function (response) {

                  $('#editar-contato-modal').modal('hide');
                  if(response){

                      bootbox.alert({
                          title:"Mensagem do sistema",
                          message: "Contato(s) alterados com sucesso!",
                          callback: function () {
                              location.reload();
                          }
                      });
                  }else{
                      bootbox.alert({
                          title:"Mensagem do sistema",
                          message: "Erro ao alterar o(s) contato(s)! Se essa mensagem persistir, contate o administrador do sistema",
                          callback: function () {
                              location.reload();
                          }
                      });
                  }

              }
          });

    });




    $('#frmSobre').submit(function (e) {
      e.preventDefault();
      $.ajax({

        url: '../controller/alterarSobre.php',
        data:{textoSobre: $('#texto-sobre').val()} ,
        method: 'POST',
        success: function (response) {

          if(response) {
            response = "Descrição atualizada com sucesso!";

          }else{
            response = "Erro! Contate o administrador do sistema";
          }
          $('#editar-sobre-modal').modal('hide');
          bootbox.alert({
            title:"Mensagem do sistema",
            message: response,
            callback: function () {
              location.reload();
            }
          });
        }
      });
    });

  });

  function getSobre() {

    $.get({
      url:'../controller/getSobre.php',
      success: function(response) {
        response = JSON.parse(response)[0];
        $('#texto-sobre').val(response.textoSobre);
        $('p.textoSobre').append(nl2br(response.textoSobre));
        $('img.imagemSobre').attr('src', response.imagemSobre);
      }
    });

  }

function initialize() {



  /*  $.ajax({

        url:'../controller/getCoordenadas.php',
        success: function (response) {
*/
          // response = JSON.parse(response);


            //Opções do mapa
            var mapOptions = {
                center: new google.maps.LatLng(-29.913978, -51.197181),
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };


            //Instancia o mapa
            var map = new google.maps.Map(document.getElementById("map_canvas"),
                mapOptions);


            //Inicializa o ponto no mapa
            var ponto = new google.maps.LatLng(-29.913978, -51.197181);


            var latlng = {lat: -29.913978, lng: -51.197181};

            var geocoder = new google.maps.Geocoder;
            var infowindow = new google.maps.InfoWindow;

            var placeId = "ChIJw5DI57R6GZURXw9ONzzBWgk";
            geocoder.geocode({'placeId': placeId}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        map.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            title:"Najma Safi - Escola de danças"
                        });
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });

    }


</script>

</body>


</html>