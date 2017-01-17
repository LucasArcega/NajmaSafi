<?php

    include ('../model/Background.php');

    if(!empty($_FILES)){

        $pagina = $_POST['pagina'];
        $ext = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);

        $arquivoBackground = $_FILES['imagem']['tmp_name'];       // Storing source path of the file in a variable
        $backgroundUrl= "../imagens/backgrounds/".$pagina."/background.".$ext; // Target path where file is to be stored

        move_uploaded_file($arquivoBackground,$backgroundUrl) ;    // Moving Uploaded file$

        $backgroundPage = "";
        switch ($pagina){
            case 'contato':
                $backgroundPage="backgroundHome";
                break;
            case 'quemSomos':
                $backgroundPage="backgroundQuemSomos";
                break;
            case 'noticias':
                $backgroundPage="backgroundNoticias";
                break;
        }
        $background = new Background();
        $background->UpdateBackground($backgroundPage, $backgroundUrl);
        echo("Background alterado com sucesso!");
    }
    else{
        echo "Erro interno, contate o administrador do sistema!";
    }
?>