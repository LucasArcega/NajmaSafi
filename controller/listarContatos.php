<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 25/12/2016
 * Time: 23:37
 */


    include '../model/contato.php';



    $data = json_decode(file_get_contents("php://input"));
    $contato = new Contato();

    echo json_encode($contato->ListarContatos(), JSON_UNESCAPED_UNICODE);


?>

