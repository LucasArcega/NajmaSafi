<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/01/2017
 * Time: 03:09
 */


    require ('../model/membro.php');
    $membro = new Membro();

    echo json_encode($membro->BuscarMembro($_POST['codigo']), JSON_UNESCAPED_UNICODE);