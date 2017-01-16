<?php
include('../model/Background.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Quem Somos - Najma Safi</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilo.css"/>

    <script type = "text/javascript" src="../scripts/jquery.js"></script>
    <script type = "text/javascript" src="../scripts/bootstrap.min.js"></script>
    <script type = "text/javascript" src="../scripts/jquery.easing.1.3.min.js"></script>
    <script type = "text/javascript" src="../scripts/angular.min.js"></script>
    <script type = "text/javascript" src="../scripts/ui-bootstrap-tpls-2.2.0.min.js"></script>
    <script type = "text/javascript" src="../scripts/membros-angular.js"></script>
    <script type = "text/javascript" src="../scripts/backgrounds.js"></script>
    <script type = "text/javascript" src="../scripts/navbar.js"></script>
    <script type = "text/javascript" src="../scripts/scrolling-nav.js"></script>
    <script type = "text/javascript" src="../scripts/atalhoLogin.js"></script>
</head>
<body >

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
					<li> <a class='page-scroll' href='../Home/'>Home</a> </li>
					<li> <a class='page-scroll' href='../Noticias'>Notícias</a> </li>
					<li> <a class='pagina-atual page-scroll' href='#top'>Quem Somos</a> </li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div  id='top' class="row">
			<div style=" background-image: url('<?php $background = new Background(); echo $background->GetBackground('backgroundQuemSomos')[0] ?>'); " class="jumbotron header header-quemSomos">

			</div>

			<div id="quemSomos-wrapper" class="col-xs-12 col-sm-10 col-sm-offset-1">
				<div id="membros" class="professor col-xs-12">

				</div>
			</div>

		</div>
	</div>

    <script>

        function nl2br(string) {
            return string.replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + '<br>' + '$2');

        }

        $(document).ready(function () {

            $.ajax({
                url: '../controller/listarMembros.php',
                success: function (response) {
                    response = JSON.parse(response);
                    for (var index in response){
                        response[index].sobreMembro = nl2br(response[index].sobreMembro);
                        $('#membros').append(
                            '<div class="col-sm-4 col-xs-12 foto-equipe text-center">'+
                                    '<img src="'+response[index].enderecoImagemMembro+'" class="img-rounded img-responsive" alt="">'+
                            '</div>'+
                            '<div class="col-xs-12 col-sm-8">'+
                                '<h2>'+response[index].nomeMembro+'</h2>'+
                                '<p class="text-left">'+
                                    '<br>'+
                                    response[index].sobreMembro+
                                '</p>'+

                            '</div>'+
                            '<div class="col-xs-12"><hr></div>'+
                            '<hr>'

                        );

                    }


                }

            });

        });

    </script>


</body>
</html>