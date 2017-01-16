<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 28/12/2016
 * Time: 03:47
 */


    include '../model/contato.php';

    $contato = new Contato();

    $whatsapp      = $_POST['whatsapp'];
    $telefoneContato  = $_POST['telefone'];
    $linkYoutube   = $_POST['linkYoutube'];
    $textoYoutube  = $_POST['textoYoutube'];
    $linkFacebook  = $_POST['linkFacebook'];
    $textoFacebook = $_POST['textoFacebook'];


   echo json_encode($contato->UpdateContato($whatsapp, $telefoneContato,
                            $linkYoutube, $textoFacebook,
                            $textoYoutube, $linkFacebook), JSON_UNESCAPED_UNICODE);
