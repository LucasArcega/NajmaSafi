<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/01/2017
 * Time: 01:51
 */



    require ('../model/membro.php');
    $membro = new Membro();


    if(isset($_POST['nome']) && isset($_POST['codigo']) && isset($_POST['descricao'])){

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $codigo = $_POST['codigo'];
        $imagem = null;
        if(isset($_FILES["imagem"])){
            $imagem = $_FILES["imagem"];
        }

        echo json_encode($membro->updateMembro($codigo, $nome, $descricao, $imagem), JSON_UNESCAPED_UNICODE);
    }