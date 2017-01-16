<?php


    require ('../model/membro.php');

    $membro = new Membro();

    $data = json_decode(file_get_contents("php://input"));

    return $membro->DeleteMembro($data->codigoMembro);

?>