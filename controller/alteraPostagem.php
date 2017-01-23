<?php


    require ('../model/post.php');
    require ('verificarLogado.php');
    $data = json_decode(file_get_contents("php://input"));

    $postagem = new Post();

    return $postagem->UpdatePost($data->codigoPostagem, $data->tituloPostagem , $data->conteudoPostagem, $data->facebookPostagem, $data->youtubePostagem);



?>