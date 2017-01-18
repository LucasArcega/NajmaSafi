<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 31/10/2016
 * Time: 00:28
 *
 */
    require ('../model/membro.php');


    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];


    if(!empty($_FILES)){

        if ((($_FILES["imagem"]["type"] == "image/gif")
                || ($_FILES["imagem"]["type"] == "image/jpeg")
                || ($_FILES["imagem"]["type"] == "image/jpg")
                || ($_FILES["imagem"]["type"] == "image/png"))) {

            $ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
            $image = "membro-" . $nome . "." . $ext;
            move_uploaded_file($_FILES["imagem"]["tmp_name"], '../imagens/membros/' . $image);
            $membro = new Membro();
            echo $membro->InsertMembro($nome, $descricao, "../imagens/membros/" . $image);
        }else{
            echo "O arquivo enviado não possui um formato de imagem aceito. Formatos aceitos: '.gif', '.jpeg', '.jpg', '.png'.";
        }
    }

    else{
        echo "Erro interno, contate o administrador do sistema!";
    }

?>