<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/12/2016
 * Time: 06:26
 */
require ('verificarLogado.php');
include '../model/sobre.php';

if(!empty($_FILES)){

    if ( ($_FILES["imagemSobre"]["type"] == "image/png") ||
        ($_FILES["imagemSobre"]["type"] == "image/jpg") ||
        ($_FILES["imagemSobre"]["type"] == "image/jpeg") ||
        ($_FILES["imagemSobre"]["type"] == "image/gif")){

        $ext = pathinfo($_FILES['imagemSobre']['name'],PATHINFO_EXTENSION);
        $arquivoImagem = $_FILES['imagemSobre']['tmp_name'];       // Storing source path of the file in a variable
        $caminhoImagem = "../imagens/sobre/imagemSobre.".$ext; // Target path where file is to be stored

        move_uploaded_file($arquivoImagem,$caminhoImagem) ;    // Moving Uploaded file

        $sobre = new Sobre();
        $sobre->updateSobreImagem($caminhoImagem);
        echo json_encode("Imagem alterada com sucesso!");

    }else{

        echo json_encode('Formato de imagem não aceito. Envie uma imagem .jpg, .png, .gif ou .jpeg');
    }
}

else{
    echo json_encode("Erro interno, contate o administrador do sistema!");
}