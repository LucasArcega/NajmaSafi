<?php include('../model/Background.php') ?>
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
    <script type = "text/javascript" src="../scripts/atalhoLogin.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilo.css"/>

</head>

<body style="background-color: white" >

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
                <li> <a class='page-scroll pagina-atual' href='#top'>Home</a>
                </li><li><a class='' href='../Noticias/'>Notícias</a> </li>
                <li> <a class='' href='../QuemSomos/'>Quem Somos</a> </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div id="top" style=" background-image: url('<?php $background = new Background(); echo $background->GetBackground('backgroundHome')[0] ?>'); " class = "header-home text-center">

    <div  class="page-top">
        <i><img class="logo" src="../imagens/logo/logo.png" alt="Najma Safi"> </i>
        <h1>Najma Safi</h1>
        <h2>Escola de danças</h2>
        <br>
        <a class="page-scroll" href="#sobre"><i class="fa fa-angle-double-down"></i></a>
    </div>

</div><div  class="container-fluid">
    <div class="row">

        <section id="sobre" class="sobre col-xs-12">

            <div class="col-xs-12 col-md-offset-1 col-md-10">
                <br>
                <br>
                <h1>Sobre nós</h1>
                <br>

                <div class="col-xs-12 col-sm-6">
                    <p class="textoSobre">

                    </p>

                </div>

                <div class="col-xs-12 col-sm-6">
                    <img src="" class="imagemSobre img-responsive" alt="">
                </div>

            </div>

        </section>

        <section class="col-xs-12" id="contato">

            <div class="contato col-md-10 col-md-offset-1 col-xs-12">

                <div class="col-xs-12 col-sm-6">
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
                            <td id="telefone"></td>

                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 38px;"><i class="fa fa-2x fa-whatsapp"> &nbsp;</i></td>
                            <td id="whatsapp"></td>
                        </tr>

                    </table>



                </div>

                <div id="endereco-wrapper" class="col-xs-12 col-sm-6">

                    <h2>Nosso Endereço</h2>

                    <br><br>

                    <div id="" class="endereco-wrapper">

                        <p><a id="link-maps" href="#" target="_blank">Veja no google maps</a></p>

                        <div id="map_canvas" style="min-width: 240px; width: 100%; min-height: 400px;" >
                            <!---------------------------      Google maps              -->

                        </div>


                    </div>

                </div>

            </div>

        </section>


    </div>
</div>
<!-- Modal -->


<section class="col-xs-12" id="footer">

    <br>
    <p class="text-center">&copy; Najma Safi - Escola de dança, <?php echo date('Y'); ?><br> Endereço: Rua Carlos Gomes, 393, Harmonia, Canoas - RS</p>
    <br>

</section>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcezQGT7hh_Xj042UOFiYRgGcRNKOIXKI&sensor=false"></script>

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

            }

        });


    }

    $(document).ready(function () {

        getContatos();
        getSobre();
        initialize();

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
