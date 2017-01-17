<?php


    require ('../model/membro.php');

    $membro = new Membro();

    $codigo = $_POST['codigo'];

    return $membro->DeleteMembro($codigo);

?>