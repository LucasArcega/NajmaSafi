<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 17/10/2016
 * Time: 02:15
 */

    $postagem = new Post();

    $data = json_decode(file_get_contents("php://input"));

    echo $postagem->GetPost($data->codigoPostagem);


?>