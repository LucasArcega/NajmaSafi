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
<html ng-app="membrosApp" lang="pt-br">
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
    <script type = "text/javascript" src="../scripts/bootbox.min.js"></script>
    <script type = "text/javascript" src="../scripts/scrolling-nav.js"></script>
    <script type = "text/javascript" src="../scripts/navbar.js"></script>
    <script type = "text/javascript" src="../scripts/quemSomos.js"></script>
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
					<li> <a class='page-scroll' href='index.php'>Home</a> </li>
					<li> <a class='page-scroll' href='noticias.php'>Notícias</a> </li>
					<li> <a class='pagina-atual page-scroll' href='#top'>Quem Somos</a> </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                        <ul class="text-center inverse-dropdown dropdown-menu">
                            <li><a href="#">Alterar Dados do Perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../controller/logoff.php">Sair</a></li>
                        </ul>
                    </li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div ng-controller="MembrosCtlr as Membros" class="row">
			<div id='top'  style=" background-image: url('<?php $background = new Background(); echo $background->GetBackground('backgroundQuemSomos')[0] ?>'); " class="text-center header header-quemSomos">
                <div class="mascara">

                </div>
                <br><br>
                <form class="form-imagem col-sm-4 col-sm-offset-4" enctype="multipart/form-data" id="frmBackground" action="">

                    <div class="form-group center-block ">
                        <h3 >Alterar imagem</h3>
                        <input id="alterarImagem" name="imagem" type="file" required accept="image/*" class="btn-alterar form-control btn-default btn">
                    </div>

                    <div class="form-group center-block">
                        <input type="hidden" name='pagina' value="quemSomos" class="form-control">
                    </div>

                    <div class="form-group center-block">
                        <input type="submit" value="Salvar" class="btn form-control btn-success">
                    </div>

                </form>

                <div  class="page-top">
                    <i><img class="logo" src="../imagens/logo/logo.png" alt="Najma Safi"> </i>
                    <h1>Najma Safi</h1>
                    <h2>Quem Somos</h2>
                    <br>
                    <a class="page-scroll" href="#sobre"><i class="fa fa-angle-double-down"></i></a>
                </div>

			</div>

			<div id="quemSomos-wrapper" class="col-xs-12 col-sm-10 col-sm-offset-1">
				<div id="membros" class="professor col-xs-12">

				</div>
			</div>
			<button data-toggle="modal" data-target="#modal-membro" class="btn btn-lg btn-primary btn-add">+</button>
		</div>
	</div>


    <div class="modal fade" role="dialog" id="modal-membro">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div  style="margin-bottom: 10px;" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title">Inserir membro</h3>
                </div>


                <div class="modal-body">
                    <form  class="" id="frmMembro" action="">
                        <div class="form-group">
                            <label for="">Nome*</label>
                            <input class="form-control"  required type="text" name="nome" id="nomeMembro" placeholder="Nome">
                            <input type="hidden" name="codigo" id="codigoMembro" value="0">
                        </div>

                        <div class="form-group">
                            <label for="">Descrição*</label>
                            <textarea class="form-control"  placeholder="Descrição" id="descricaoMembro" rows="5" required name="descricao"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Foto*</label>
                            <input type="file"  accept="image/*" name="imagem" file-upload >
                        </div>

                        <div class="text-right">
                            <button type="button" data-dismiss="modal" class="btn btn-defalt">Cancelar</button>
                            <input type="submit"  class="btn btn-primary" value="Salvar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
