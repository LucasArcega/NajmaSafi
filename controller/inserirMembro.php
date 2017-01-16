<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 31/10/2016
 * Time: 00:28
 *
 */
    require ('../model/membro.php');

    $membroData = json_decode($_POST['membro']);

    if(!empty($_FILES)){

        if ((($_FILES["image"]["type"] == "image/gif")
                || ($_FILES["image"]["type"] == "image/jpeg")
                || ($_FILES["image"]["type"] == "image/jpg")
                || ($_FILES["image"]["type"] == "image/png"))) {

            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $image = "membro-" . $membroData->nome . "." . $ext;
            move_uploaded_file($_FILES["image"]["tmp_name"], '../imagens/membros/' . $image);
            $membro = new Membro();
            echo $membro->InsertMembro($membroData->nome, $membroData->descricao, "../imagens/membros/" . $image);
        }else{
            echo "O arquivo enviado não possui um formato de imagem aceito. Formatos aceitos: '.gif', '.jpeg', '.jpg', '.png'.";
        }
    }

    else{
        echo "Erro interno, contate o administrador do sistema!";
    }

?>