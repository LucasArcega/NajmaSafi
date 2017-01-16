<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/12/2016
 * Time: 08:50
 */
    include '../model/sobre.php';

    $sobre = new Sobre();


    echo json_encode($sobre->getSobre(), JSON_UNESCAPED_UNICODE);


?>