<?php
require('../model/post.php');


    require ('verificarLogado.php');
    $postagem = new Post();
    if(isset($_POST['titulo'])&& isset($_POST['conteudo']) )
        if($postagem->insertPost($_POST['titulo'],$_POST['conteudo'],$_POST['facebook'],$_POST['youtube']))
            echo "veio";
        else{

            echo "naoveio";
        }
    else{

        var_dump($_POST);
    }

?>