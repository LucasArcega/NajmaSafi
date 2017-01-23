<?php
    require ('verificarLogado.php');
    require('../model/post.php');

   $postagem = new Post();

   $data = json_decode(file_get_contents("php://input"));

   return  $postagem->DeletePost($data->codigoPostagem);