<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/12/2016
 * Time: 06:10
 */


    include '../model/sobre.php';

    $sobre = new Sobre();
    echo json_encode( $sobre->getSobre(), JSON_UNESCAPED_UNICODE );

?>